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
        Schema::create('college_institution_backgrounds', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personal_id');

            $table->string('name_of_college');
            $table->string('certificate_index_number')->unique();
            $table->string('year_completed_college');
            $table->string('course_attended');
            $table->string('award_college');


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
        Schema::dropIfExists('college_instution_backgrounds');
    }
};
