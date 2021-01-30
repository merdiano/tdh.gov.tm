<?php 
class Cms60155c786915e999221615_79520d30f5dbefc30f6ce366cac0ea0cClass extends Cms\Classes\PageCode
{
public function onStart(){

        $this["category"] = $this->param('slug');

        $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();

    }
}
