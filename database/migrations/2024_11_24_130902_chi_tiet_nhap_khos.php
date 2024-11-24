<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chi_tiet_nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nhap_kho');
            $table->integer('id_san_pham');
            $table->integer('so_luong');
            $table->integer('id_loai');
            $table->integer('don_gia');
            $table->integer('thanh_tien');
            $table->string('ghi_chu')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_nhap_khos');
    }
};
