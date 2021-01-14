<?php 
class Cms6000472a8038c595784986_09f930b848ed410f6dad644ba417780fClass extends Cms\Classes\PartialCode
{
public function onStart(){
    
    $this["main_posts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->main_news)->orderBy('created_at', 'desc')->first();
    $this["myposts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();


    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->main_news)->first();
    
    $this["posts_filtered2"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();
    $this["cat2"] = \Indikator\News\Models\Categories::where("id", $this->theme->comment_news)->first();


    $featured = \Indikator\News\Models\Posts::where("featured", true)->orderBy('created_at', 'desc')->get();
    
    $this['postFeatured'] = $featured; 
}
}
