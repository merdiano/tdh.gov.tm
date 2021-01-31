<?php 
class Cms6015959311027029353919_e1ef6467f88b9964770a9fe34245aadfClass extends Cms\Classes\PageCode
{
public function onStart(){

    $this['videos'] = Admin\Videos\Models\Video::paginate(10);


    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
