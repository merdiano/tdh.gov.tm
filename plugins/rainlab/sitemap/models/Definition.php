<?php namespace RainLab\Sitemap\Models;

use Cms\Classes\Page;
use Illuminate\Support\Facades\App;
use October\Rain\Router\Router as RainRouter;
use Url;
use Model;
use Event;
use Request;
use DOMDocument;
use Cms\Classes\Theme;
use RainLab\Sitemap\Classes\DefinitionItem;

/**
 * Definition Model
 */
class Definition extends Model
{
    /**
     * Maximum URLs allowed (Protocol limit is 50k)
     */
    const MAX_URLS = 50000;

    /**
     * Maximum generated URLs per type
     */
    const MAX_GENERATED = 10000;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rainlab_sitemap_definitions';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var integer A tally of URLs added to the sitemap
     */
    protected $urlCount = 0;

    /**
     * @var array List of attribute names which are json encoded and decoded from the database.
     */
    protected $jsonable = ['data'];

    /**
     * @var array The sitemap items.
     * Items are objects of the \RainLab\Sitemap\Classes\DefinitionItem class.
     */
    public $items;

    /**
     * @var DOMDocument element
     */
    protected $urlSet;

    /**
     * @var DOMDocument
     */
    protected $xmlObject;

    protected $locale;

    public function beforeSave()
    {
        $this->data = (array) $this->items;
    }

    public function afterFetch()
    {
        $this->items = DefinitionItem::initFromArray($this->data);
    }

    public function generateSitemap()
    {
        if (!$this->items) {
            return;
        }

        $currentUrl = Request::path();
        $theme = Theme::load($this->theme);
        $translator = \RainLab\Translate\Classes\Translator::instance();
        $defaultLocale = \RainLab\Translate\Models\Locale::getDefault()->code;
        $alternateLocales = array_keys(\RainLab\Translate\Models\Locale::listEnabled());
//        $translator->setLocale(App::getLocale(), false);
        $this->locale = App::getLocale();
        /*
         * Cycle each page and add its URL
         */
        foreach ($this->items as $item) {

            /*
             * Explicit URL
             */
            if ($item->type == 'url') {
                $this->addItemToSet($item, Url::to($item->url));
            }
            /*
             * Registered sitemap type
             */
            else {

                $apiResult = Event::fire('pages.menuitem.resolveItem', [$item->type, $item, $currentUrl, $theme]);

                if (!is_array($apiResult)) {
                    continue;
                }

                foreach ($apiResult as $itemInfo) {
                    if (!is_array($itemInfo)) {
                        continue;
                    }

                    /*
                                         * Single item
                                         */
                    if (isset($itemInfo['url'])) {
                        $url = $itemInfo['url'];
                        $alternateLocaleUrls = [];

                        if ($item->type == 'cms-page') {
                            $page = Page::loadCached($theme, $item->reference);
                            $router = new RainRouter;

                            if ($page->hasTranslatablePageUrl($defaultLocale)) {
                                $page->rewriteTranslatablePageUrl($defaultLocale);
                            }

                            $url = $translator->getPathInLocale($page->url, $defaultLocale);
                            $url = $router->urlFromPattern($url);
                            $url = Url::to($url);

                            if (count($alternateLocales) > 1) {
                                foreach ($alternateLocales as $locale) {
                                    if ($page->hasTranslatablePageUrl($locale)) {
                                        $page->rewriteTranslatablePageUrl($locale);
                                    }
                                    $altUrl = $translator->getPathInLocale($page->url, $locale);
                                    $altUrl = $router->urlFromPattern($altUrl);
                                    $alternateLocaleUrls[$locale] = Url::to($altUrl);
                                }
                            }
                        }

                        if (isset($itemInfo['alternate_locale_urls'])) {
                            $alternateLocaleUrls = $itemInfo['alternate_locale_urls'];
                        }

                        $this->addItemToSet($item, $url, array_get($itemInfo, 'mtime'), $alternateLocaleUrls);
                    }

                    /*
                     * Multiple items
                     */
                    if (isset($itemInfo['items'])) {

                        $parentItem = $item;

                        $itemIterator = function($items) use (&$itemIterator, $parentItem)
                        {

                            foreach ($items as $item) {
                                if (isset($item['url'])) {
                                    $this->addPostToSet($parentItem, $item);
                                }

                                if (isset($item['items'])) {
                                    $itemIterator($item['items']);
                                }
                            }
                        };

                        $itemIterator($itemInfo['items']);
                    }
                }

            }

        }

        $urlSet = $this->makeUrlSet();
        $xml = $this->makeXmlObject();
        $xml->appendChild($urlSet);

        return $xml->saveXML();
    }

    protected function makeXmlObject()
    {
        if ($this->xmlObject !== null) {
            return $this->xmlObject;
        }

        $xml = new DOMDocument;
        $xml->encoding = 'UTF-8';

        return $this->xmlObject = $xml;
    }

    protected function makeUrlSet()
    {
        if ($this->urlSet !== null) {
            return $this->urlSet;
        }

        $xml = $this->makeXmlObject();
        $urlSet = $xml->createElement('urlset');
        $urlSet->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $urlSet->setAttribute('xmlns:xhtml', 'http://www.w3.org/1999/xhtml');
        $urlSet->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $urlSet->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
        $urlSet->setAttribute("xmlns:news","http://www.google.com/schemas/sitemap-news/0.9");
        return $this->urlSet = $urlSet;
    }

    protected  function addPostToSet($item,$post){
        if ($post['mtime'] instanceof \DateTime) {
            $post['mtime'] = $post['mtime']->getTimestamp();
        }

        $xml = $this->makeXmlObject();
        $urlSet = $this->makeUrlSet();

        $post['mtime'] = $post['mtime'] ? date('c', $post['mtime']) : date('c');

        $urlElement = $this->makePostElement(
            $xml,
            $post
        );

        if ($urlElement) {
            $urlSet->appendChild($urlElement);
        }
    }

    protected function addItemToSet($item, $url, $mtime = null, $localeUrls = [])
    {
        if ($mtime instanceof \DateTime) {
            $mtime = $mtime->getTimestamp();
        }

        $xml = $this->makeXmlObject();
        $urlSet = $this->makeUrlSet();
        $mtime = $mtime ? date('c', $mtime) : date('c');

        if ($localeUrls) {
            foreach ($localeUrls as $alternateLocaleUrl) {
                $urlElement = $this->makeUrlElement(
                    $xml,
                    $alternateLocaleUrl,
                    $mtime,
                    $item->changefreq,
                    $item->priority,
                    $localeUrls
                );
                if ($urlElement) {
                    $urlSet->appendChild($urlElement);
                }
            }
        }
        else{
            $urlElement = $this->makeUrlElement(
                $xml,
                $url,
                $mtime,
                $item->changefreq,
                $item->priority
            );

            if ($urlElement) {
                $urlSet->appendChild($urlElement);
            }
        }


        return $urlSet;
    }
//<url>
//<loc>http://www.example.org/business/article55.html</loc>
//<news:news>
//<news:publication>
//<news:name>The Example Times</news:name>
//<news:language>en</news:language>
//</news:publication>
//<news:publication_date>2008-12-23</news:publication_date>
//<news:title>Companies A, B in Merger Talks</news:title>
//</news:news>
//</url>
    protected function makePostElement($xml,$item){
        if ($this->urlCount >= self::MAX_URLS) {
            return false;
        }

        $this->urlCount++;

        $url = $xml->createElement('url');
        $url->appendChild($xml->createElement('loc', $item['url']));

        $postElement = $xml->createElement('news:news');

        $name = $xml->createElement('news:name',$item['title']);
        $lang= $xml->createElement('news:language',$this->locale);
        $publication = $xml->createElement('news:publication');
        $publication->appendChild($name);

        $publication->appendChild($lang);


        $postElement->appendChild($publication);

        $postElement->appendChild($xml->createElement('news:publication_date', $item['published_at']));

        $url->appendChild($postElement);

        return $url;
    }
    protected function makeUrlElement($xml, $pageUrl, $lastModified, $frequency, $priority, $alternateLocaleUrls = [])
    {
        if ($this->urlCount >= self::MAX_URLS) {
            return false;
        }

        $this->urlCount++;

        $url = $xml->createElement('url');
        $url->appendChild($xml->createElement('loc', $pageUrl));
        $url->appendChild($xml->createElement('lastmod', $lastModified));
        $url->appendChild($xml->createElement('changefreq', $frequency));
        $url->appendChild($xml->createElement('priority', $priority));
        foreach ($alternateLocaleUrls as $locale => $locale_url) {
            $alternateUrl = $xml->createElement('xhtml:link');
            $alternateUrl->setAttribute('rel', 'alternate');
            $alternateUrl->setAttribute('hreflang', $locale);
            $alternateUrl->setAttribute('href', $locale_url);
            $url->appendChild($alternateUrl);
        }

        return $url;
    }
}
