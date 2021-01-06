<?php 
class Cms5ff452cc7667d644605913_2c35e2ed4c49bb3a83d731e2da5bc1c5Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $this["posts_filtered"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->foreign_news)->get();
        $cat = \Indikator\News\Models\Categories::where("id", $this->theme->foreign_news)->first();
        $this["cat"] = $cat;
       
    }
}
