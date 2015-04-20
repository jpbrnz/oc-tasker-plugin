<?php namespace Jbdev\Tasker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStatusesTable extends Migration
{

    public function up()
    {
        Schema::create('jbdev_tasker_statuses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('percentcomplete')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jbdev_tasker_statuses');
    }

}
