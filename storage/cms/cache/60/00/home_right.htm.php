<?php 
class Cms5fd8b0be719ab109470069_de9c4263659c25990dc605f1051abe98Class extends Cms\Classes\PartialCode
{
public function onStart(){

        $this['interesting'] = Admin\Interesting\Models\Interesing::all();

    }
}
