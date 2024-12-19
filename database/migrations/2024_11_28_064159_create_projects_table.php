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

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->string('course');
            $table->timestamps();
            //user_id adalah nama kolomnya yang harus disamakan spt di function hasMany
            $table->foreignId('client_id')->constrained(
                table: 'clients', //terhubung ke tabel apa
                indexName: 'projects_client_id' //nama relasinya
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
