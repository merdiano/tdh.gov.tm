<?php 
class Cms600065e928f5b452494166_d5a294a44bdd77b7a5865ea5408e95caClass extends Cms\Classes\PageCode
{
public function onStart(){

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
