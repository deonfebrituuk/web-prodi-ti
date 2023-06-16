<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangsTable extends Migration
{
   
    public function up()
    {
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('tentangs');
    }
}