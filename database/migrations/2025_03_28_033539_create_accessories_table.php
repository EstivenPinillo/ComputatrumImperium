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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('computers_id');
            $table->foreign('computers_id')->references('id')->on('computers');
            $table->unsignedBigInteger('conditions_id');
            $table->foreign('conditions_id')->references('id')->on('conditions');
            $table->string('provider_serial', length: 150);
            $table->string('description', length: 100);
            $table->string('brand', length: 100);
            $table->string('model', length: 100);
            $table->string('observation', length: 300);
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
            $table->index('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
