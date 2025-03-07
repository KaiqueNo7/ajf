<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->index();
            $table->char('session_id', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
