<?php 
class Cms6006e71d5f920161144023_e0b1dcca546c03db73b7df561e0d09eeClass extends Cms\Classes\PageCode
{
public function onStart(){

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
