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
        Schema::create('user_reminder_tmps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_reminder_id')->unsigned()->index();
            $table->enum('status', ['success','inprogress','failed'])->default('inprogress');
            $table->timestamps();

            // Assign FK
            $table->foreign('user_reminder_id')->references('id')->on('user_reminders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_reminder_tmps');
    }
};
