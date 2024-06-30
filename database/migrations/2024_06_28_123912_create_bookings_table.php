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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('negara');
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->text('preferensi_tambahan')->nullable();
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->string('kamar');
            $table->string('tambah_rencana')->nullable();
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
