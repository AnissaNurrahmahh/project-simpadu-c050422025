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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_identitas');
            $table->string('nama', 255);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('agama', 255);
            $table->string('alamat', 255);
            $table->string('nomor_telepon', 255);
            $table->string('email', 255);
            $table->string('created_by', 255)->default('default_value');
            $table->string('updated_by', 255)->default('default_value');
            $table->string('deleted_by', 255)->default('default_value');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
