<?php 
use RainLab\Translate\Classes\Translator;class Cms60155ae946adc418610428_205260f8b0e0c59e18d54c52b78dc252Class extends Cms\Classes\PageCode
{

protected $translator;
public function onStart()
{
    $this->translator = Translator::instance();
    $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();

    $featured = \Indikator\News\Models\Posts::where("featured", true)->where("locale", App::getLocale())->orderBy('created_at', 'desc')->get()->first();
    
    $this['postFeatured'] = $featured; 
    if($featured->images->first->path){
        $imagedata = getimagesize($featured->images->first->path->path);

        $this['imageType'] = $imagedata[0] > $imagedata[1] ? "horizontal" : "vertical";
    }
    

}
}
