<?php 
class Cms6006d713314e3393550522_57ecbfae26a7a731bc1074aa88005e45Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
