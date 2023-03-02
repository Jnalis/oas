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
        Schema::create('next_of_kin', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personal_id');

            $table->string('name_kin')->nullable();
            $table->string('phone_kin')->nullable();
            $table->string('relationship_kin')->nullable();
            $table->string('district_kin')->nullable();
            $table->string('town_city_kin')->nullable();


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
        Schema::dropIfExists('next_of_kin');
    }
};
