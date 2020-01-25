<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CteatesProductablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productables', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('quantity');
            $table->string('name');
            $table->unsignedBigInteger('price');
            $table->string('thumbnail');

            $table->timestamps();
            $table->unsignedBigInteger('productable_id');
            $table->string('productable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productables');
    }
}
