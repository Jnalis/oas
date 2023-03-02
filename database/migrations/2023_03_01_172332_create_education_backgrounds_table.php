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
        Schema::create('education_backgrounds', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personal_id');

            $table->string('primary_school_name');
            $table->string('level_of_education');
            $table->string('award');
            $table->string('year_completed');
            $table->string('index_number')->unique();
            $table->string('examination_center');
            $table->string('remarks');


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
        Schema::dropIfExists('education_backgrounds');
    }
};
