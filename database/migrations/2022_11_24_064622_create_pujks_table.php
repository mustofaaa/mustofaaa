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
        Schema::create('pujk', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->string('weight status');
            $table->string('hoby');
            $table->string('age');
            $table->string('free_consult');
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
        Schema::dropIfExists('pujk');
    }
};
