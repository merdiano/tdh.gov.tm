<?php


namespace KoderHut\RssFeedster\Classes\DataSource;

use \Indikator\News\Models\Posts;
use KoderHut\RssFeedster\Classes\Contracts\IDataSource;

class NewsSource implements IDataSource
{
    /**
     * Maximum number of items to display in the feed
     */
    const MAX_NO_ITEMS = 10;

    /**
     * Cache for the data
     *
     * @var array|mixed
     */
    protected $data = [];

    /**
     * Disaply the full content of the post
     *
     * @var  bool
     */
    protected $displayFullContent = false;

    /**
     * Constructor
     *
     * @param array $params
     */
    public function __construct($params = null)
    {
        if (null === $params) {
            return $this;
        }

        $this->page           = $params['page'];
        $this->controller     = $params['controller'];
        $this->commentsAnchor = $params['comments_anchor'];
    }
    /**
     * Load the news
     *
     * @param int $maxItems
     *
     * @return mixed
     */
    public function loadData($maxItems = self::MAX_NO_ITEMS)
    {
        $posts = null;

        if (!empty($this->data)) {
            return $this->data;
        }
        $model = new Posts();
        $locale = request('locale');

        $posts = $model->listFrontEnd([
            'sort'    => 'published_at desc',
            'perPage' => $maxItems,
            'locale' => in_array($locale,['ru','en','tk'])? $locale : 'en'
        ]);


        foreach ($posts as $post) {
            $post->setUrl($this->page, $this->controller);
//            $post->comments_url = "{$post->url}/#{$this->commentsAnchor}";
            $post->feed_content = true === $this->displayFullContent ? $post->content : $post->introductory;
        }

        return $this->data = $posts;
    }

    /**
     * Retrieve posts from cache or load them and then return them
     *
     * @param int $maxItems
     *
     * @return mixed
     */
    public function getData($maxItems = self::MAX_NO_ITEMS)
    {

        if (null !== $this->data && !empty($this->data)) {
            return $this->data;
        }

        $this->data = $this->loadData($maxItems);

        return $this->data;
    }

    /**
     * Set if we display the full post content or a summary
     *
     * @param bool $fullContent
     */
    public function setDisplayFullContent($fullContent = true)
    {
        $this->displayFullContent = $fullContent;
    }
}
