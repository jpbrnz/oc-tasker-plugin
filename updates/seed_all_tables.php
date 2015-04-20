<?php namespace Jbdev\Tasker\Updates;

use Jbdev\Tasker\Models\Note;
use Jbdev\Tasker\Models\Status;
use Jbdev\Tasker\Models\Project;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Status::create(['name' => 'Started',     'percentcomplete' => '5%']);
        Status::create(['name' => 'in Production',     'percentcomplete' => '20%']);
        Status::create(['name' => 'Under review',      'percentcomplete' => '40%']);
        Status::create(['name' => 'Edits Updates', 'percentcomplete' => '60%']);
        Status::create(['name' => 'Final Review',  'percentcomplete' => '90%']);
        Status::create(['name' => 'Completed',      'percentcomplete' => '100%']);
        Status::create(['name' => 'On Hold',     'percentcomplete' => '0%']);
    }
}
