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
        Schema::create('tb_kendaraan', function(Blueprint $table){
            $table->id();
            $table->string('plat_nomer');
            $table->string('warna');
            $table->string('pemilik');
            $table->foreignId('user_id')->constrained('users')->onDeleted('cascade');
            $table->enum('jenis_kendaraan', ['motor', 'mobil']);
            $table->timestamps();
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
