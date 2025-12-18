<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('adoptings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->constrained()->cascadeOnDelete();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('address');
            $table->string('city');
            $table->string('postcode');
            $table->string('other_animal');
            $table->string('children');
            $table->string('environment');
            $table->string('outside');
            $table->string('creation_date');
            $table->string('state');
            $table->string('comment');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoptings');
    }
};
