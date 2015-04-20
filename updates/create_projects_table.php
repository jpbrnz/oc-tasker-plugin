<?php namespace Jbdev\Tasker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{

    public function up()
    {
        Schema::create('jbdev_tasker_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->date('dueby')->nullable();
            $table->date('completed')->nullable();
            $table->text('description')->nullable();
            $table->integer('status_id')->unsigned()->nullable()->index();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jbdev_tasker_projects');
    }

}
