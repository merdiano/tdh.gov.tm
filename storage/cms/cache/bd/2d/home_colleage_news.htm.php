<?php 
class Cms6006e2ddd0358406910641_17f0328bde8d6ab5995c451dafbb0d7aClass extends Cms\Classes\PartialCode
{
public function onStart(){


    $this['collegueNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(10)->get();
    
    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->colleagues_news)->first();
}
}
