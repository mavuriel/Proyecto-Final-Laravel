<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancias', function (Blueprint $table) {
            $table->id();
            $table->char('matricula');
            $table->char('conductor',100);
            $table->char('destino',100);
            $table->float('tara',10,5);
            $table->float('bascula',10,5);
            $table->float('pesototal',10,5);
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
        Schema::dropIfExists('mercancias');
    }
}
