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
        Schema::create('ref_reminders', function (Blueprint $table) {
            $table->id();
            $table->string('ref_rmndr_name');
            $table->string('ref_rmndr_type');
            $table->string('ref_rmndr_message');
            $table->string('ref_rmndr_sent_hour')->default('09:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_reminders');
    }
};
