<?php namespace PatrickJamal\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePatrickjamalEventsschedule extends Migration
{
    public function up()
    {
        Schema::create('patrickjamal_eventsschedule_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('location_and_time');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('patrickjamal_eventsschedule_');
    }
}
