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
        Schema::create('calbacks', function (Blueprint $table) {
            $table->id();

            $table->string('phone');
            $table->string('address_ru');
            $table->string('address_uz');
            $table->string('gmail');
            $table->string('information_ru');
            $table->string('information_uz');

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
        Schema::dropIfExists('calbacks');
    }
};
