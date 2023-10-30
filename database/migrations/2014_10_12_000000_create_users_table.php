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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('no_telp');
            $table->string('cv');
            $table->string('lamaran');
            $table->string('foto');
            $table->string('role')->default('user');
            $table->enum('status', ['menunggu', 'ditolak', 'diterima', 'lulus','dipecat'])->default('menunggu');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->datetime('tanggal_wawancara')->nullable();
            $table->foreignId('devision_id')->nullable()->references('id')->on('divisions')->onUpdate('cascade')->onDelete('restrict');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
