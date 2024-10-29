<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\models\Author;
use app\models\Language;
use app\models\Topic;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('title',250);
            $table->foreign('topic_id')->references('id')->on('topics')->constrained();
            $table->foreignIdFor(Language::class)->constrained();
            $table->foreignIdFor(Author::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
