<?php 
use RainLab\Translate\Classes\Translator;class Cms600060be8d63f075812543_64513bd364281e2303d353d6f2a1c838Class extends Cms\Classes\PageCode
{

protected $translator;
public function onStart()
{
    $this->translator = Translator::instance();
    $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();

    $featured = \Indikator\News\Models\Posts::where("featured", true)->where("locale", App::getLocale())->orderBy('created_at', 'desc')->get()->first();
    
    $this['postFeatured'] = $featured; 

    $imagedata = getimagesize($featured->images->first->path->path);

        $this['imageType'] = $imagedata[0] > $imagedata[1] ? "horizontal" : "vertical";

    
    

}
}
