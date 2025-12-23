<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('image_path')->default('public/assets/img/animalProfil.jpg');
            $table->string('name');
            $table->string('age');
            $table->string('date');
            $table->string('breed');
            $table->string('coat');
            $table->string('state');
            $table->string('sex');
            $table->string('vaccine');
            $table->string('type');
            $table->string('attitude');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
