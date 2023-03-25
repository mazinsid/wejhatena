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
        Schema::create('ads_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ads_id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('phone_no');
            $table->longText('description_en');
            $table->longText('description_ar');
            $table->tinyInteger('status')->default(0);
            $table->foreign('ads_id')->references('id')->on('ads')->onDelete('cascade');
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
        Schema::dropIfExists('ads_details');
    }
};
