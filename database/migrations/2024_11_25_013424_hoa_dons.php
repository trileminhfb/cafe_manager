<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->integer('id_gio_hang');
            $table->integer('id_dia_chi');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
