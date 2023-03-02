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
        Schema::create('applicant_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personal_id');

            $table->string('current_work_place')->nullable();
            $table->string('position_title')->nullable();
            $table->string('ward')->nullable();
            $table->string('district_council')->nullable();
            $table->string('region_applicant')->nullable();
            $table->string('appointment_years')->nullable();
            $table->string('employer_phone')->nullable();


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
        Schema::dropIfExists('applicant_details');
    }
};
