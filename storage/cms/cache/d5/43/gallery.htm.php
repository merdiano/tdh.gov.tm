<?php 
class Cms60004d0fca045877235759_04bb2f223762ad2bc914719d12d02da7Class extends Cms\Classes\PageCode
{
public function onStart(){

    $gallery = Admin\Photos\Models\Photo::paginate(1);
    $this['gallery'] = $gallery;

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
