<?php namespace Jbdev\Tasker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{

    public function up()
    {
        Schema::create('jbdev_tasker_notes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject')->nullable();
            $table->text('content')->nullable();
            $table->integer('project_id')->unsigned()->nullable()->index();
            $table->integer('owner_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jbdev_tasker_notes');
    }

}
