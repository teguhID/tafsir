<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InbuKatsir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibnuKatsir', function (Blueprint $table){
            $table->increments('id');
            $table->string('surat')->nullable();
            $table->text('ayat')->nullable();
            $table->longText('tafsir')->nullable();
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
        Shema::dropIfExists('ibnuKatsir');
    }
}
