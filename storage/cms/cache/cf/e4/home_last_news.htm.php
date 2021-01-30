<?php 
class Cms60155c6f8bda2829159309_000a08c672d2c1918e56e8b80c192df6Class extends Cms\Classes\PartialCode
{
public function onStart(){

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
}
}
