<?php

use App\Enums\nhan_viens\status_nhan_viens;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_chuc_vu');
            $table->string('ho_va_ten');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
            $table->integer('tinh_trang')->default(status_nhan_viens::AVAILABLE);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
