<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeLinesBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_lines_brand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_shoe_lines_brand');
            $table->foreign('id_shoe_lines_brand')->references('id')->on('shoe_brand')->onDelete('cascade');
            $table->string('name_shoe_lines_brand');
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
        Schema::dropIfExists('shoe_lines_brand');
    }
}
