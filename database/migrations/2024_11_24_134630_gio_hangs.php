<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gio_hangs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_san_pham');
            $table->integer('id_khach_hang');
            $table->integer('so_luong_mua');
            $table->integer('don_gia_mua');
            $table->integer('thanh_tien');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gio_hangs');
    }
};
