<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minerals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->float('BK',8,3)->default(0);
            $table->float('PK',8,3)->default(0);
            $table->float('TDN',8,3)->default(0);
            $table->float('CA',8,3)->default(0);
            $table->float('P',8,3)->default(0);
            $table->longtext('detail')->nullable();
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
        Schema::dropIfExists('minerals');
    }
}
