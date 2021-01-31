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

//    public function getPath($fileName = null)
//     {
//         $url = '';
//         if (empty($fileName)) {
//             $fileName = $this->disk_name;
//         }
//         $url =  $this->getPublicPath().  $this->getPartitionDirectory() . $fileName;
//         return $url;
//     }


//     public function getPartitionDirectory(){
//         return 'video/'. date('Y/m/d/');
//     }

    protected function getPartitionDirectory()
    {
        if (strpos($this->disk_name, 'ideo/'))
            return '';
        
            return 'video/'. implode('/', array_slice(explode( "-", $this->disk_name), 0, 3)) . '/';
        
    }

    //     /**
    //      * Generates a disk name from the supplied file name.
    //      */
    protected function getDiskName()
    {
        if ($this->disk_name !== null) {
            return $this->disk_name;
        }

        $ext = strtolower($this->getExtension());

        // If file was uploaded without extension, attempt to guess it
        if (!$ext && $this->data instanceof UploadedFile) {
            $ext = $this->data->guessExtension();
        }

        // $name = str_replace('.', '', uniqid(null, true));

        $name = str_replace('.', '', date('Y-m-d-').uniqid(null, true));
          
        return $this->disk_name = !empty($ext) ? $name.'.'.$ext : $name;
    }

}