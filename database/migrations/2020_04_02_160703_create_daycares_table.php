<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaycaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daycares', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->mediumText('name')->nullable();
            $table->longText('description')->nullable();
            $table->mediumText('owner')->nullable();

            $table->mediumText('address')->nullable();
            $table->mediumText('city')->nullable();
            $table->mediumText('state')->nullable();
            $table->mediumText('zip')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();

            $table->mediumText('contact')->nullable();
            $table->mediumText('email')->nullable();
            $table->mediumText('web')->nullable();

            $table->double('price')->nullable();
            $table->integer('age_low')->nullable();
            $table->integer('age_high')->nullable();
            $table->integer('gender')->nullable();

            // $table->boolean('mon')->default('0');
            // $table->boolean('tue')->default('0');
            // $table->boolean('wed')->default('0');
            // $table->boolean('thu')->default('0');
            // $table->boolean('fri')->default('0');
            // $table->boolean('sat')->default('0');
            // $table->boolean('sun')->default('0');

            $table->boolean('mon')->nullable();
            $table->boolean('tue')->nullable();
            $table->boolean('wed')->nullable();
            $table->boolean('thu')->nullable();
            $table->boolean('fri')->nullable();
            $table->boolean('sat')->nullable();
            $table->boolean('sun')->nullable();

            $table->mediumText('time_start')->nullable();
            $table->mediumText('time_end')->nullable();
            $table->double('students_per_teacher')->nullable();
            $table->longText('curriculum')->nullable();

            $table->boolean('accepting_students')->nullable();
            $table->boolean('licensed')->nullable();
            $table->boolean('care_type')->nullable();
            $table->integer('wait_list')->nullable();

            $table->mediumText('img01')->nullable();
            $table->mediumText('img02')->nullable();
            $table->mediumText('img03')->nullable();

            $table->integer('rating')->nullable();
            $table->integer('reviews')->nullable();
            
            $table->date('started_on')->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daycares');
    }
}
