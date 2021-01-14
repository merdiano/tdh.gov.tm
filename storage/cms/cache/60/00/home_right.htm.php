<?php 
class Cms6000472adebb4878349857_80b393d3ce88fe5beb1cae50d77141faClass extends Cms\Classes\PartialCode
{
public function onStart(){

        $this['interesting'] = Admin\Interesting\Models\Interesing::all();

    }
}
