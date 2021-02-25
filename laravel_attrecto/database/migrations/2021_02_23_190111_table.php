<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soreim', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('tipusok');
            $table->string('malatak');
            $table->string('komlok');
            $table->string('elesztok');
            $table->string('cukor');
            $table->string('moszat');
            $table->string('laktoz');
            $table->string('megcsinalt');
            $table->string('mikor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soreim');
    }
}
