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
        Schema::create('users', function (Blueprint $table) {

            $table->id('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('Gender');
            $table->string('password',4);
            $table->boolean('status')->default('0');
            $table->unsignedBigInteger('role_id')->default('0');
            $table->foreign('role_id')->constrained()->references('id')->on('role')
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
        Schema::dropIfExists('users');
    }
};
