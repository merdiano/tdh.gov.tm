<?php 
class Cms6006e696a7f18188449258_1b7179d709c05328c59b6197595d88f3Class extends Cms\Classes\PageCode
{
public function onStart(){

    $this['videos'] = Admin\Videos\Models\Video::paginate(10);
    

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
