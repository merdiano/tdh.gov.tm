<?php 
class Cms5ffef7bc3e6c4138544738_93515698ae34b1d86c13068c5972c7d8Class extends Cms\Classes\PageCode
{
public function onStart(){

    $this['videos'] = Admin\Videos\Models\Video::paginate(1);
    

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
