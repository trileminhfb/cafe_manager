<?php

use App\Enums\nha_cung_caps\status_nha_cung_caps;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nha_cung_caps', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nha_cung_cap');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
            $table->integer('tinh_trang')->default(status_nha_cung_caps::AVAILABLE);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nha_cung_caps');
    }
};
