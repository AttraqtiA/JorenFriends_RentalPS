<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id');
            $table->foreign('pengguna_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('playstation_id');
            $table->foreign('playstation_id')->references('id')->on('playstations')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal')->nullable(false);
            $table->integer('durasiBermain')->nullable(false);
            $table->integer('jumlahOrang')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
