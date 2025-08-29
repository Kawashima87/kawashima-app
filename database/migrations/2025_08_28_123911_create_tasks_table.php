<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();                    // BIGINT UNSIGNED, PK
            $table->string('title', 100);
            $table->unsignedTinyInteger('status')->default(1);
        });
    }
    public function down(): void { Schema::dropIfExists('tasks'); }
};