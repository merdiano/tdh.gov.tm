<?php namespace Admin\Videos\Classes;

use Hash;
use Backend;
use Config;
use Url;
use Backend\Controllers\Files;
use Mail;
use System\Models\File;

class Attachment extends File
{

   public function getPath($fileName = null)
    {
        $url = '';
        if (empty($fileName)) {
            $fileName = $this->disk_name;
        }
        $url =  $this->getPublicPath().  $this->getPartitionDirectory() . $fileName;
        return $url;
    }


    public function getPartitionDirectory(){
        return 'video/'. date('Y/m/d/');
    }

}