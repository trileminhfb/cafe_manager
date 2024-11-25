<?php

use App\Enums\tong_gio_hangs\status_tong_gio_hangs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nha_cung_caps', function (Blueprint $table) {
            $table->id();
            $table->integer('id_gio_hang');
            $table->integer('id_khach_hang');
            $table->date('thanh_tien');
            $table->string('ghi_chu')->nullable();
            $table->string('ghi_chu');
            $table->integer('tinh_trang')->default(status_tong_gio_hangs::DONE);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nha_cung_caps');
    }
};
