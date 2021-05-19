<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
    Schema::create('mahasiswa', function (Blueprint $table) {
    $table->string('nim');
    $table->string('nama');
    $table->string('jurusan');
    $table->string('updated_at');
    $table->string('created_at');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    });
    }
    
}

    /*
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /*
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }   
}
*/