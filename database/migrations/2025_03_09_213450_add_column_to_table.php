<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('skin_results', function (Blueprint $table) {
            $table->id();
            $table->string('skin_type');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skin_results');
    }
};
