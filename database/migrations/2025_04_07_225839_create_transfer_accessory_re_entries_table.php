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
        Schema::create('transfer_accessory_re_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ucl_id');
            $table->foreign('ucl_id')->references('ucl_id')->on('user_computer_locations');
            $table->unsignedBigInteger('accessory_id');
            $table->foreign('accessory_id')->references('id')->on('accessories');
            $table->unsignedBigInteger('condition_id');
            $table->foreign('condition_id')->references('id')->on('conditions');
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
        Schema::dropIfExists('transfer_accessory_re_entries');
    }
};
