<?php 
class Cms60155a1a4bc50109750235_80cf8fca213d7961f8eb635b444af020Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
