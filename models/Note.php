<?php namespace Jbdev\Tasker\Models;

use Model;

/**
 * Note Model
 */
class Note extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jbdev_tasker_notes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'project' => ['Jbdev\Tasker\Models\Project'],
        'owner' => ['Backend\Models\User'],
    ];

}