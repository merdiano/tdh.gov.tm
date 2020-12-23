<?php 
class Cms5fdb4ceb610d8588352149_8c1ef9661d05662e9a9f547f61fa67e6Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
