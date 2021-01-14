<?php 
class Cms6000472af1f8d691218242_c9dda49c08ca0b8699f7e13f50336008Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
