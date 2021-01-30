<?php 
class Cms60155a19c8531375591649_6624224792f9943c83ec8790b71727c2Class extends Cms\Classes\PageCode
{
public function onStart(){

    $this['videos'] = Admin\Videos\Models\Video::paginate(10);


    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
