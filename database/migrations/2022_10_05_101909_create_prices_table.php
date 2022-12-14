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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id')->nullable()->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('SET NULL');

            $table->string('number_people_ru');
            $table->string('number_people_uz');

            $table->text('lesson_ru');
            $table->text('lesson_uz');

            $table->string('course_fee_ru');
            $table->string('course_fee_uz');

            $table->text('registration_course_ru');
            $table->text('registration_course_uz');

            $table->text('meta_title_ru')->nullable();
            $table->text('meta_title_uz')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();

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
        Schema::dropIfExists('prices');
    }
};
