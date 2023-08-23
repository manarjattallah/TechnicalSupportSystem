<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('عنوان المشكلة');
            $table->string('وصف المشكلة');
            $table->string('صاحب المشكلة')->unique()->nullable(false);;
            $table->string('مكان المكتب');
            $table->binary('مرفقات الطلب');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
