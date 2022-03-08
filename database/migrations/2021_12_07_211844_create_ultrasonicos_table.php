<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUltrasonicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultrasonicos', function (Blueprint $table) {
            $table->string('id');
            $table->string('value');
            $table->string('date');
            $table->primary('id');
            $table->timestamps();
        });
    }

    /**
     ** Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ultrasonicos');
    }
}
