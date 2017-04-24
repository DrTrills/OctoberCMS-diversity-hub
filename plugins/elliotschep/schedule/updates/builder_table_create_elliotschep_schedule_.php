<?php namespace ElliotSchep\Schedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElliotschepSchedule extends Migration
{
    public function up()
    {
        Schema::create('elliotschep_schedule_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('talk_time');
            $table->text('talk_summary');
            $table->string('talk_location');
            $table->string('talk_duration');
            $table->string('talk_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elliotschep_schedule_');
    }
}
