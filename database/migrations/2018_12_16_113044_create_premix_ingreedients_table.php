<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremixIngreedientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premix_ingreedients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->float('Ca',8,3)->default(0);
            $table->float('P',8,3)->default(0);
            $table->float('Na',8,3)->default(0);
            $table->float('Cl',8,3)->default(0);
            $table->float('K',8,3)->default(0);
            $table->float('Fe',8,3)->default(0);
            $table->float('Mg',8,3)->default(0);
            $table->float('Mn',8,3)->default(0);
            $table->float('I',8,3)->default(0);
            $table->float('Zn',8,3)->default(0);
            $table->float('Cu',8,3)->default(0);
            $table->float('Co',8,3)->default(0);
            $table->float('Se',8,3)->default(0);
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
        Schema::dropIfExists('premix_ingreedients');
    }
}
