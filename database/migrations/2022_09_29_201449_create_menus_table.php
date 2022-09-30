<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();                        
            $table->string('url')->nullable();            
            $table->string('icono')->nullable();            
            $table->string('nombre')->nullable();
            $table->text('descripcion')->nullable();
            $table->enum('target', ['_blank', '_self'])->nullable();
            $table->enum('estado', ['1', '0'])->index()->default('1');
            $table->text('propiedades')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
