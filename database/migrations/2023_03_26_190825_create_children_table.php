<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->bigIncrements('id');    
            $table->string('nama');
            $table->string('ttl');
            $table->string('umur');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('nama_ibu');
            $table->integer('berat_badan');
            $table->integer('panjang_badan');
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
        Schema::dropIfExists('children');
    }
}
