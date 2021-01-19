<?php 
class Cms6006e2103aee5055676123_0c044c43f5efe0824b52638bbb241deeClass extends Cms\Classes\PartialCode
{
public function onStart(){

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
}
}
