<?php 
class Cms60005c2775c22118788859_72d2bfd76dfa3816aa9b40b690027b80Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
