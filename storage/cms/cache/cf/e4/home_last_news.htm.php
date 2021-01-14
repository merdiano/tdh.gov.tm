<?php 
class Cms60005b80cd2bb395538274_54bc6e8fdb6229fa0aaf9e9154caff22Class extends Cms\Classes\PartialCode
{
public function onStart(){

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
}
}
