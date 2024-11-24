<?php

use App\Enums\san_phams\status_san_phams;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->integer('id_loai');
            $table->string('ten_san_pham');
            $table->string('mo_ta_ngan');
            $table->string('mo_ta_chi_tiet');
            $table->integer('gia_ban');
            $table->string('hinh_anh');
            $table->integer('tinh_trang')->default(status_san_phams::AVAILABLE);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
