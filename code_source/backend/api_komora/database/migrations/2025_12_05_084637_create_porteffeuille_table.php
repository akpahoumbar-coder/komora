<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portefeuilles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->decimal('solde_courant', 15, 2)->default(0.00);
            $table->decimal('retrait_en_cours', 15, 2)->default(0.00);
            $table->decimal('retrait_effectue', 15, 2)->default(0.00);
            $table->boolean('peut_retirer')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portefeuilles');}
};
