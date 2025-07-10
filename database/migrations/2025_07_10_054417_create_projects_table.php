<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->enum('category', ['Web', 'Mobile', 'Graphic Design', 'Other']);
            $table->text('description');
            $table->string('tech_stack', 255);
            $table->string('live_link', 255)->nullable();
            $table->string('github_link', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
