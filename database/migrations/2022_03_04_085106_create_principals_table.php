<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->string('numeroC',10);
            $table->string('nombre', 50);
            $table->string('apeP',50);
            $table->string('apeM',50);
            $table->string('cal1',10)->nullable();
            $table->string('cal2',10)->nullable();
            $table->string('cal3',10)->nullable();
            $table->string('cal4',10)->nullable();
            $table->string('cal5',10)->nullable();
            $table->string('U1',10)->nullable();
            $table->string('U2',10)->nullable();
            $table->string('U3',10)->nullable();
            $table->string('U4',10)->nullable();
            $table->string('U5',10)->nullable();
            $table->string('calF',10)->nullable();
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
        Schema::dropIfExists('principals');
    }
}
