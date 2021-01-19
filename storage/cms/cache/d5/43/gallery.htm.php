<?php 
class Cms6006e64eee283240813311_640e624c7e1d7fb4e685f6a263000a0fClass extends Cms\Classes\PageCode
{
public function onStart(){

    $gallery = Admin\Photos\Models\Photo::paginate(10   );
    $this['gallery'] = $gallery;

    $this['lastNews'] = \Indikator\News\Models\Posts::where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->limit(6)->get();


}
}
