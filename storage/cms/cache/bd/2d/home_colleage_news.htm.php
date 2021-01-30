<?php 
class Cms60155c6f9a294028240207_28722363827e5d84266c78c06be6eb4fClass extends Cms\Classes\PartialCode
{
public function onStart(){


    $this['collegueNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->colleagues_news)->first();
}
}
