<?php 
class Cms5ff452cca08ad034595695_eab491232eef583b47b4cb16fd8878d7Class extends Cms\Classes\PartialCode
{
public function onStart(){

        $this['interesting'] = Admin\Interesting\Models\Interesing::all();

    }
}
