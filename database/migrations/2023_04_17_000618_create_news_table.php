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
        Schema::create('news', function (Blueprint $table) {
            $table->id('id_new');
            $table->uuid();
            $table->string('title');
            $table->string('avatar')->nullable();;
            $table->text('intro');
            $table->text('content');
            $table->string('author');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('category_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
