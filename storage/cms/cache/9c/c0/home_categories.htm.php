<?php 
class Cms6016e84bd727e900874448_39dece90f2cac7faf0da2f55368eb6d4Class extends Cms\Classes\PartialCode
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
