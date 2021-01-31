<?php 
class Cms6016c76c9ce2a912248430_ef8e15384a7fde4d4f764dd76e222625Class extends Cms\Classes\PageCode
{
public function onStart(){

    $gallery = Admin\Photos\Models\Photo::orderBy("date")->paginate(10);
    $this['gallery'] = $gallery;

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
