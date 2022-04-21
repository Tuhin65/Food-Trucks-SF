<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name',31);
            $table->string('description',128);
            $table->string('owner',128);
            $table->string('type',16);
            $table->text('food_items');
            $table->decimal('gridx',10,3,TRUE);
            $table->decimal('gridy',10,3,TRUE);
            $table->decimal('latitude',16,13)->index();
            $table->decimal('longitude',16,12)->index();
            $table->mediumInteger('zip')->index();
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
        Schema::dropIfExists('locations');
    }
}
