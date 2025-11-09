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
        Schema::create('check_clock_setting_times', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('ck_settings_id');
                $table->date('day');
                $table->time('clock_in');
                $table->time('clock_out');
                $table->time('break_start');
                $table->time('break_end');
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
                $table->timestamp('deleted_at')->nullable();


                $table->foreign('ck_settings_id')->references('id')->on('check_clock_settings')->onDelete('cascade');

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_clock_setting_times');
    }
};
