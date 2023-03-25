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
        Schema::create('ads_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ads_details_id');
            $table->string('name');
            $table->string('display_name');
            $table->string('file_type');
            $table->foreign('ads_details_id')->references('id')->on('ads_details')->onDelete('cascade');
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
        Schema::dropIfExists('ads_files');
    }
};
