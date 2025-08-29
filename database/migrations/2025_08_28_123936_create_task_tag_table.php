<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('task_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('task_id'); // 親BIGINTに揃える
            $table->unsignedBigInteger('tag_id');

            $table->primary(['task_id', 'tag_id']);
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->index('tag_id');
        });
    }
    public function down(): void { Schema::dropIfExists('task_tag'); }
};