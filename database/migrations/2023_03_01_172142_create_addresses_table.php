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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personal_id');

            $table->string('pobox')->nullable();
            $table->string('town_city')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_no')->unique()->nullable();
            $table->string('email')->unique()->nullable();


            $table->foreign('personal_id')
                ->references('id')
                ->on('personal_information')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('addresses');
    }
};
