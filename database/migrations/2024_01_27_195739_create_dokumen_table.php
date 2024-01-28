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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->string('idtracking');
            $table->string('judul');
            $table->string('tglsubmit');
            $table->string('function');
            $table->string('vcpu');
            $table->string('ram');
            $table->string('disk');
            $table->string('targetonboarding');
            $table->string('notadinas')->nullable();
            $table->string('bisnisreview')->nullable();
            $table->string('dataresource')->nullable();
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
