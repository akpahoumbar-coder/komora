<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partenaire_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partenaire_id');
            $table->integer('total_vente')->default(0);
            $table->decimal('total_montant_vente', 15, 2)->default(0);
            $table->decimal('total_commission', 15, 2)->default(0);
            $table->integer('total_vente_week')->default(0);
            $table->decimal('total_montant_vente_week', 15, 2)->default(0);
            $table->decimal('total_commission_week', 15, 2)->default(0);
            $table->integer('total_vente_jour')->default(0);
            $table->decimal('total_montant_vente_jour', 15, 2)->default(0);
            $table->decimal('total_commission_jour', 15, 2)->default(0);
            $table->integer('total_vente_mois')->default(0);
            $table->decimal('total_montant_vente_mois', 15, 2)->default(0);
            $table->decimal('total_commission_mois', 15, 2)->default(0);
            $table->timestamps();

            $table->foreign('partenaire_id')->references('id')->on('partenaires')->onDelete('cascade');
        });
    }
    public function down(): void { Schema::dropIfExists('partenaire_stats');}
};
