<?php

use App\Enums\tong_gio_hangs\status_tong_gio_hangs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tong_gio_hangs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_gio_hang');
            $table->integer('id_khach_hang');
            $table->integer('thanh_tien');
            $table->string('ghi_chu')->nullable();
            $table->date('thoi_gian_dat');
            $table->integer('tinh_trang')->default(status_tong_gio_hangs::WAITING);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tong_gio_hangs');
    }
};
