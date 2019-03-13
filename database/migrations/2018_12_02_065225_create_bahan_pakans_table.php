<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahanPakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_pakans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->float('BK',8,3)->default(0);
            $table->float('PK',8,3)->default(0);
            $table->float('TDN',8,3)->default(0);
            $table->float('Ca',8,3)->default(0);
            $table->float('P',8,3)->default(0);
            $table->float('Fe',8,3)->default(0);
            $table->float('Mg',8,3)->default(0);
            $table->float('Mn',8,3)->default(0);
            $table->float('K',8,3)->default(0);
            $table->float('Zn',8,3)->default(0);
            $table->boolean('carrier')->default(false);
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
        Schema::dropIfExists('bahan_pakans');
    }
}
