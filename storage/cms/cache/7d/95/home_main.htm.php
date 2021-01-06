<?php 
class Cms5ff452cc277b2014192311_915a30d6f401fe332cb16e3cc0cd3dc0Class extends Cms\Classes\PartialCode
{
public function onStart(){
    
    $this["main_posts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->main_news)->orderBy('created_at', 'desc')->first();
    $this["myposts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();


    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->main_news)->first();
    
    $this["posts_filtered2"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();
    $this["cat2"] = \Indikator\News\Models\Categories::where("id", $this->theme->comment_news)->first();

}
}
