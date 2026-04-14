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
        Schema::create('tb_transaksi', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kendaraan_id')->constrained('tb_kendaraan')->onDelete('cascade');
            $table->timestamp('waktu_masuk')->useCurrent();
            $table->timestamp('waktu_keluar')->nullable();
            $table->foreignId('tarif_id')->constrained('tb_tarif_pembayaran')->onDelete('cascade');
            $table->integer('durasi_jam')->nullable();
            $table->decimal('biaya_total')->nullable();
            $table->enum('status', ['masuk', 'keluar']);
            $table->foreignId('area_id')->constrained('tb_area_parkir')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
