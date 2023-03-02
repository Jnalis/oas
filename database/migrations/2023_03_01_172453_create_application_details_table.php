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
        Schema::create('application_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personal_id');

            $table->string('reg_no')->unique()->nullable();

            $table->unsignedBigInteger('campuses_name');
            $table->unsignedBigInteger('application_type');
            $table->enum('application_status', ['approved', 'not approved'])->default('not approved');



            $table->foreign('personal_id')
                ->references('id')
                ->on('personal_information')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('campuses_name')
                ->references('id')
                ->on('campuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('application_type')
                ->references('id')
                ->on('application_types')
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
        Schema::dropIfExists('application_details');
    }
};
