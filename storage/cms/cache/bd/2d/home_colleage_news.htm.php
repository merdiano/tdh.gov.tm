<?php 
class Cms6016e7fc8e63a708283161_1eee2565fa0b619fd0e78099db5ccddbClass extends Cms\Classes\PartialCode
{
public function onStart(){


    $this['collegueNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->colleagues_news)->first();

    
    $this['currentLanguage'] = $this->activeLocale;

    $this['collegueNews2'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", 5)->orderBy('created_at', 'desc')->limit(10)->get();
    
    $this["cat2"] = \Indikator\News\Models\Categories::where("id", 5)->first();

}
}
