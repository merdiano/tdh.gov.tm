<?php 
class Cms5fd8b0be6e329203127423_4a5ec4afd7caaaed11dcc3767355af18Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $this["posts_filtered"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->foreign_news)->get();
        $cat = \Indikator\News\Models\Categories::where("id", $this->theme->foreign_news)->first();
        $this["cat"] = $cat;
       
    }
}
