<?php 
class Cms6006e54624790341435917_aa167e23ffece47cec58b059e14d5ef5Class extends Cms\Classes\PageCode
{
public function onStart(){

        $this["category"] = $this->param('slug');

        $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();

    }
}
