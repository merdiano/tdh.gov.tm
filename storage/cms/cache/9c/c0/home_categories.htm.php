<?php 
class Cms60004081101db990845001_74296f87270b5e5bd3c6dd2f26c5be8aClass extends Cms\Classes\PartialCode
{
public function onStart(){
 
    $this['categories'] = \Indikator\News\Models\Categories::orderBy("sort_order")->limit(6)->get();

    
    $this['interesting'] = Admin\Interesting\Models\Interesing::all();
    $this['news'] = Admin\WeeklyNews\Models\WeeklyNews::orderBy('created_at', 'desc')->get()->first();

    $this['gallery'] = Admin\Photos\Models\Photo::orderBy("date")->limit(2)->get();
    $this['gallery'] = Admin\Photos\Models\Photo::orderBy("date")->limit(2)->get();
    $this['videos'] = Admin\Videos\Models\Video::orderBy("date")->limit(2)->get();

    $this['mainNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", $this->theme->main_news)->orderBy('created_at', 'desc')->limit(4)->get();
    $this["main_news_cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->main_news)->first();
}
}
