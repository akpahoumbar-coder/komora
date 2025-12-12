<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('numero_whatsapp')->unique();
            $table->string('mot_de_passe');
            $table->boolean('est_affilie')->default(false);
            $table->boolean('est_partenaire')->default(false);
            $table->boolean('est_investisseur')->default(false);
            $table->boolean('est_livreur')->default(false);
            $table->boolean('est_visiteur')->default(true);
            $table->unsignedBigInteger('portefeuille_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');}
};