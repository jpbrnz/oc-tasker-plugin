<?php namespace Jbdev\Tasker\Models;

use Model;

/**
 * Status Model
 */
class Status extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jbdev_tasker_statuses';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}