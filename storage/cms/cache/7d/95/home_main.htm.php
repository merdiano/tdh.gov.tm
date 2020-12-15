<?php 
class Cms5fd8b0be60979894600562_a0c39d5a5dc2d3a8fa241dd3a8c89c87Class extends Cms\Classes\PartialCode
{
public function onStart(){
    
    $this["main_posts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->main_news)->orderBy('created_at', 'desc')->first();
    $this["myposts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();


    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->main_news)->first();
    
    $this["posts_filtered2"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();
    $this["cat2"] = \Indikator\News\Models\Categories::where("id", $this->theme->comment_news)->first();

}
}
