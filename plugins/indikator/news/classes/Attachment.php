<?php namespace Indikator\News\Classes;

use Hash;
use Backend;
use Config;
use Url;
use Backend\Controllers\Files;
use Illuminate\Http\UploadedFile;
use Mail;
use System\Models\File;

class Attachment extends File
{
    protected function getPartitionDirectory()
    {
        if (strpos($this->disk_name, 'rticle/'))
            return '';
        
            return 'article/'. implode('/', array_slice(explode( "-", $this->disk_name), 0, 3)) . '/';
        
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