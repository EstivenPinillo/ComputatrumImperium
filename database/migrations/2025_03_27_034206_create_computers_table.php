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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id')->onDelete('cascade');;
            $table->foreign('provider_id')->references('id')->on('companies');
            $table->unsignedBigInteger('condition_id');
            $table->foreign('condition_id')->references('id')->on('conditions');
            $table->string('provider_serial', length: 150);
            $table->string('brand', length: 100);
            $table->string('factory_serial', length: 150);
            $table->string('motherboard', length: 150);
            $table->string('processor', length: 150);
            $table->string('ram_memory', length: 150);
            $table->string('storage', length: 100);
            $table->string('grafic_card', length: 150);
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
        Schema::dropIfExists('computers');
    }
};
