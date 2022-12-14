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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sub_category_id')->nullable()->index();
            $table->foreign('sub_category_id') 
                ->references('id')
                ->on('sub_categories')
                ->onDelete('SET NULL');

            $table->string('slug_ru');
            $table->string('slug_uz');

            $table->string('title_ru');
            $table->string('title_uz');

            $table->text('course_description_ru');
            $table->text('course_description_uz');

            $table->string('age_of_students');

            $table->integer('complexity');

            $table->text('course_registration_ru');
            $table->text('course_registration_uz');

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
        Schema::dropIfExists('products');
    }
};
