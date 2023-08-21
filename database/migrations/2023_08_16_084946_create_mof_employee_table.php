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
        Schema::create('mof_employee', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_no');
            $table->integer('emp_id')->unique();
            $table->string('full_name', 383);
            $table->integer('parent_unit');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mof_employee');
    }
};
