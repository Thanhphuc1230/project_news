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
        Schema::create('save_post', function (Blueprint $table) {
            $table->id('id_save_post');
            $table->uuid();
            $table->string('id_post');
            $table->string('user_id');
            $table->tinyInteger('status_save');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('save_post');
    }
};
