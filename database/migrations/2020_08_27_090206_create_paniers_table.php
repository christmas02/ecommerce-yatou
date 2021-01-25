<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('produits_id')->index();
            $table->unsignedBigInteger('commandes_id')->index();
            $table->dateTime('date');
            
            $table->timestamps();

            $table->foreing('produits_id')->references('id')->on('produits');
            $table->foreing('commandes_id')->references('id')->on('commandes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paniers');
    }
}
