<?php 
class Cms60005f94bcde6340764662_4edb9136a12206e4c79777157c08ba0fClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $this["posts_filtered"] = \Indikator\News\Models\Posts::where("category_id", $this->theme->foreign_news)->get();
        $cat = \Indikator\News\Models\Categories::where("id", $this->theme->foreign_news)->first();
        $this["cat"] = $cat;
       

        
    }
}
