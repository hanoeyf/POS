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
        Schema::create('m_user', function (Blueprint $table) {
            $table->bigIncrements('user_id'); 
            $table->unsignedBigInteger('level_id'); 
            $table->string('username', 20);
            $table->string('nama', 100);
            $table->string('password', 255);
            $table->timestamps(); 
        
            // Foreign Key
            $table->foreign('level_id')->references('level_id')->on('m_level')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
