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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('pembuat');
            $table->string('judul');
            $table->foreignId('devisi_id')->references('id')->on('divisis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('batas');
            $table->string('pekerja');
            $table->string('slot');
            $table->string('gaji');
            $table->enum('tipe',['kontrak','permanen']);
            $table->longText('lokasi');
            $table->longText('syarat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
