<?php 
class Cms5fdb4ceb56f24941599221_bdf73c8cc9a980ce2d95357771597f38Class extends Cms\Classes\PartialCode
{
public function onStart(){

        $this['interesting'] = Admin\Interesting\Models\Interesing::all();

    }
}
