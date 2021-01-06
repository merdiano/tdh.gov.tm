<?php 
class Cms5ff452ccaa962779694744_0cafb6ea44c78a8cde407bd470c038aaClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
