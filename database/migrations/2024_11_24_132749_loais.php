<?php

use App\Enums\loais\status_loais;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loais', function (Blueprint $table) {
            $table->id();
            $table->string('ten_loai');
            $table->string('hinh_anh')->nullable();
            $table->integer('tinh_trang')->default(status_loais::AVAILABLE)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loais');
    }
};
