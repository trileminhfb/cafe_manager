<?php

use App\Enums\nhap_khos\status_nhap_khos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nha_cung_cap');
            $table->integer('id_nhan_vien');
            $table->string('ma_nhap_kho')->unique();
            $table->integer('tong_tien');
            $table->integer('tinh_trang')->default(status_nhap_khos::WAITING);
            $table->string('ghi_chu')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nhap_khos');
    }
};
