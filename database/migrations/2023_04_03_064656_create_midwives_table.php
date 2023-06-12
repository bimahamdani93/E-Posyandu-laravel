<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidwivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midwives', function (Blueprint $table) {
            $table->bigIncrements('id');    
            $table->string('nama');
            $table->text('alamat');
            $table->string('ttl');
            $table->string('umur');
            $table->string('nip');
            $table->unsignedBigInteger('id_pendidikan');
            $table->foreign('id_pendidikan')->references('id')->on('education')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_telepon');
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
        Schema::dropIfExists('midwives');
    }
}
