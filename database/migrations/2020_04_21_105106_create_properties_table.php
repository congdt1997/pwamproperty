<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idLocation')->length(10);
            $table->unsignedInteger('idType')->length(10);
            $table->unsignedInteger('idFeature')->length(10);
            $table->unsignedInteger('idReview')->length(10);
            $table->unsignedInteger('idUser')->length(10);
            $table->string('detailaddress');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('acreage');
            $table->decimal('price', 18,2);
            $table->string('introduction');
            $table->string('image');
            $table->string('detail');
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
        Schema::dropIfExists('properties');
    }
}
