<?php 
class Cms6016a2280dbea958676547_4996fee7778861e7da73cc4c4e5d6e4fClass extends Cms\Classes\PageCode
{
public function onStart(){

        $this["category"] = $this->param('slug');

        $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();

    }
}
