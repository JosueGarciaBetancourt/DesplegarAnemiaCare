<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Provincias', function (Blueprint $table) {
            $table->string('idProvincia')->primary();
            $table->string('nombreProvincia');
            $table->decimal('alturaProvincia', 6, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Provincias');
    }
};