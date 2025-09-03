<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedInteger('sortNumber')->default(1);
            $table->timestamp('createDate')->useCurrent();                       // 挿入時に現在時刻
            $table->timestamp('UpdateDate')->useCurrent()->useCurrentOnUpdate(); // 更新時に自動更新
        });
    }
    public function down(): void { Schema::dropIfExists('tasks'); }
};