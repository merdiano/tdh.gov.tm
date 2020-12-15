<?php namespace Admin\Interesting\Models;

use Model;

/**
 * Model
 */
class Interesing extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_interesting_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
