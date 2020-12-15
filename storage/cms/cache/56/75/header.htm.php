<?php 
class Cms5fd8b0be7708b482413191_4412dbe9683322d470574adb14b8affeClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $categories = \Indikator\News\Models\Categories::all();
        $this["categories"] = $categories;

    }
}
