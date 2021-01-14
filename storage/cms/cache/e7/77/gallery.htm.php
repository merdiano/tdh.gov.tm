<?php 
class Cms60004749b0389128559717_25dbe084ed41a835c5b49683b48895fdClass extends Cms\Classes\PageCode
{
public function onStart(){

        $gallery = Admin\Photos\Models\Photo::all();
        $this['gallery'] = $gallery;

    }
}
