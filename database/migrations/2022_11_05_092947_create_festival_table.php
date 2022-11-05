<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festival', function (Blueprint $table) {
            $table->id();
            $table->string('nome_evento', 10);
            $table->text('label');
            $table->boolean('outdoor');
            $table->string('indirizzo', 100);
            $table->date('quando');
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
        Schema::dropIfExists('festival');
    }
}
