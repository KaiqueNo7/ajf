<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->mediumText('project');
            $table->mediumText('plant');
            $table->string('size', 100);
            $table->string('bedrooms', 100);
            $table->string('bathrooms', 100);
            $table->string('address');
            $table->string('maps');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
