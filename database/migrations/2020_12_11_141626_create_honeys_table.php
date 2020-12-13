<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('honeys', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('weight');
            $table->float('price', 4 , 2);
            $table->string('description');
            $table->boolean('available');
            $table->string('image');
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
        Schema::dropIfExists('honeys');
    }
}
