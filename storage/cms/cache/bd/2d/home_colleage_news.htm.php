<?php 
class Cms60005b80d9c9e306266512_c576fd108810ba7d16b1b9590debaa9eClass extends Cms\Classes\PartialCode
{
public function onStart(){


    $this['collegueNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->colleagues_news)->first();
}
}
