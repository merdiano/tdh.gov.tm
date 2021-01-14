<?php namespace Admin\Photos\Models;

use Model;
use Illuminate\Support\Facades\DB;

/**
 * Model
 */
class Photo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_photos_';

    public $attachMany = [
        'image' => 'System\Models\File',
        // 'thumb_image' => 'System\Models\File',
    ];

    protected $jsonable = [
        'image'
    ];
    public $attachOne = [
        'cat_image' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public function getImages(){
        // return Photo::where('id', $this->id)
        //     ->get();
        return Photo::where('id', $this->id)
        ->get()->first()->image;
    }
}
