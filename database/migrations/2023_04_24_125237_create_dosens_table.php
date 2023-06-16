<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
  
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 250);
            $table->string('nidn', 100);
            $table->text('ttl');
            $table->string('jabatan', 250);
            $table->string('email', 250);
            $table->string('wa', 20);
            $table->string('ig', 150);
            $table->string('fb', 150);
            $table->integer('idGambar');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}