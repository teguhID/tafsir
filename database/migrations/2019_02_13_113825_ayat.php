<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayat', function (Blueprint $table){
            $table->increments('id');
            $table->string('juz')->nullable();
            $table->string('surat')->nullable();
            $table->text('ayat')->nullable();
            $table->text('latin')->nullable();
            $table->text('terjemahan')->nullable();
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
        Shema::dropIfExists('ayat');
    }
}
