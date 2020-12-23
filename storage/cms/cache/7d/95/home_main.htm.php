<?php 
class Cms5fdb4ceb180d4814713238_e181072b18937792aa0432992591e1e9Class extends Cms\Classes\PartialCode
{
public function onStart(){
    
    $this["main_posts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->main_news)->orderBy('created_at', 'desc')->first();
    $this["myposts"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();


    $this["cat"] = \Indikator\News\Models\Categories::where("id", $this->theme->main_news)->first();
    
    $this["posts_filtered2"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->comment_news)->orderBy('created_at', 'desc')->first();
    $this["cat2"] = \Indikator\News\Models\Categories::where("id", $this->theme->comment_news)->first();

}
}
