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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // اسم القسم
            $table->float('gpa');             // المعدل
            $table->string('study_type');     // نوع الدراسة (صباحي / مسائي)
            $table->string('branch');         // الفرع (أحيائي / تطبيقي)
            $table->float('fees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
