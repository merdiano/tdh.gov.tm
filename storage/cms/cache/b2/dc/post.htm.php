<?php 
class Cms60155c71415d2568334756_3258aeee5ff7dbf76fc32784c1d7e4a3Class extends Cms\Classes\PageCode
{
public function onStart(){

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();

}
}
