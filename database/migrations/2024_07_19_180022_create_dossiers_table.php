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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->unsignedBigInteger('user_id'); 
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('titre');
            $table->string('description');
            $table->decimal('montant');
            $table->string('etat')->default("en cours");

            $table->string('piece_jointe')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
