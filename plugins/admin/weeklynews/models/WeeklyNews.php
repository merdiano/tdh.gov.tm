<?php namespace Admin\WeeklyNews\Models;

use Model;

/**
 * Model
 */
class WeeklyNews extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_weeklynews_posts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'pdf' => 'System\Models\File',
        'image' => 'System\Models\File',
    ];
}
