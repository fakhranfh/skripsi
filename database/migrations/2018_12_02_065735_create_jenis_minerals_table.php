<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_minerals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('foto')->nullable(); 
            $table->longtext('penjelasan')->nullable();
            $table->longtext('fungsi')->nullable();
            $table->longtext('defisiensi')->nullable();   
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
        Schema::dropIfExists('jenis_minerals');
    }
}
