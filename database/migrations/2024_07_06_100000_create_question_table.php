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
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('questionName');
            $table->string('category');
            $table->string('description');
            $table->string('answer');
            $table->text('photo');
            $table->text('video')->nullable;
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->constrained()->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_question');
    }
};
