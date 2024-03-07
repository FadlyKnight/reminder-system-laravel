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
        Schema::create('user_reminders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('ref_reminder_id')->unsigned()->index();
            $table->string('timezone')->default('Asia/Jakarta');
            $table->date('occur_date')->nullable()->comment('the reminders need to send at what date');
            $table->timestamps();

            // Assign FK
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('ref_reminder_id')->references('id')->on('ref_reminders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_reminders');
    }
};
