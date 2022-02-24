<?php namespace Gadimliestudio\Trainings\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTrainingsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_trainings_trainings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('image');
            $table->text('title');
            $table->text('who_its_for')->nullable();
            $table->text('duration')->nullable();
            $table->text('content')->nullable();






            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_trainings_trainings');
    }
}
