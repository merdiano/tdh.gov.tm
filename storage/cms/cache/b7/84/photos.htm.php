<?php 
class Cms600047f3b1bef871412908_ef613c602b4b4daf914e26e02ff4617fClass extends Cms\Classes\PageCode
{
public function onStart(){

        $category_id = (int)$this->param('category_id');
        
        $this["photos"] = Admin\Photos\Models\Photo
                    ::where("id", $category_id)
                    ->get();

        
    }
}
