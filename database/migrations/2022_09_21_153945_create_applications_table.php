<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', static function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone_number', 15);
            $table->string('mail');
            $table->string('course_title',);
            $table->Time('course_time');
            $table->string('course_langugage');
            $table->string('course_type');
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
        Schema::dropIfExists('applications');
    }
};
