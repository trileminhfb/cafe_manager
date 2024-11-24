<?php

use App\Enums\chuc_vus\status_chuc_vus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chuc_vus', function (Blueprint $table) {
            $table->id();
            $table->string('ten_chuc_vu');
            $table->integer('tinh_trang')->default(status_chuc_vus::AVAILABLE);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chuc_vus');
    }
};
