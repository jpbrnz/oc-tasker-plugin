<?php namespace Jbdev\Tasker\Models;

use Model;
/**
 * Project Model
 */
class Project extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jbdev_tasker_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'notes' => ['Jbdev\Tasker\Models\Note'],
    ];

    public $belongsTo = [
        'status' => ['Jbdev\Tasker\Models\Status'],
    ];

    public $attachOne = [
            'images' => ['System\Models\File'],
    ];
    public $attachMany = [
            'portfolio' => ['System\Models\File'],
            'files' => ['System\Models\File'],
    ];
}