<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numero');
            $table->string('mail')->unique();
            $table->string('adresse')->nullable();
            $table->decimal('solde', 15, 2)->default(0);
            $table->string('mot_de_passe');
            $table->json('produits_preferes')->nullable();
            $table->json('categories_preferes')->nullable();
            $table->json('produits_suggeres')->nullable();
            $table->json('categories_suggerees')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('clients');}
};
