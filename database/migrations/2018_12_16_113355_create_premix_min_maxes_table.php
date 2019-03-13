<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremixMinMaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premix_min_maxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sumber');
            $table->float('minimal',8,3)->default(0);
            $table->float('maksimal',8,3)->default(0);
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
        Schema::dropIfExists('premix_min_maxes');
    }
}
