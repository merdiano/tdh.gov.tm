<?php 
class Cms5ffdb175dd0d9730393445_1a9c4a86f9c20cdafcb46c6e9ebb44b0Class extends Cms\Classes\PageCode
{
public function onStart(){

        $this["category"] = $this->param('slug');

        $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();

    }
}
