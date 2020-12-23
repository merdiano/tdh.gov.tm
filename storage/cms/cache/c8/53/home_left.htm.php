<?php 
class Cms5fdb4ceb48b70972856120_37e72f0cfad9dd18de14aafc7df9f182Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $this["posts_filtered"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->foreign_news)->get();
        $cat = \Indikator\News\Models\Categories::where("id", $this->theme->foreign_news)->first();
        $this["cat"] = $cat;
       
    }
}
