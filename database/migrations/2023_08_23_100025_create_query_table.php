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
        Schema::create('query', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('الجهة الطالبة');
            $table->string('حالة الانجاز');
            $table->date('فترة الطلب من');
            $table->date('فترة الطلب الى');
            $table->string('صاحب المشكلة');
            $table->string('مكان الصيانة');
            $table->date('فترة الصيانة من');
            $table->date('فترة الصيانة الى');
            $table->string('المستلم');
            $table->string('حالة الاستلام');
            $table->date('فترة التسليم من');
            $table->date('فترة التسليم الى');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('query');
    }
};
