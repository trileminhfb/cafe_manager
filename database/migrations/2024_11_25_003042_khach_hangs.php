<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_khach_hang');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('so_dien_thoai')->nullable()->unique();
            $table->date('ngay_sinh')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
