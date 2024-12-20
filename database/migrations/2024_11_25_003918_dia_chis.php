<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dia_chis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_khach_hang');
            $table->string('dia_chi');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dia_chis');
    }
};
