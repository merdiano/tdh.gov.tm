<?php 
use RainLab\Translate\Classes\Translator;class Cms6006e0c288bea694961920_c5359d11581ae08303ac58175dc064a8Class extends Cms\Classes\PageCode
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
