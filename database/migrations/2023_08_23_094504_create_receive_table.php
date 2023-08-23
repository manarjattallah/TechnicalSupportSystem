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
        Schema::create('receive', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('المكلف بالصيانة');
            $table->string('مكان الصيانة');
            $table->date('وقت الاستلام');
            $table->string('المستلم');
            $table->string('الجهاز المستلم');
            $table->string('اولوية الصيانة');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receive');
    }
};
