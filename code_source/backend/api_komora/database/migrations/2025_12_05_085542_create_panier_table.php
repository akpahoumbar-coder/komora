<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->integer('quantite')->default(1);
            $table->string('code_reduction')->nullable();
            $table->string('code_affilie')->nullable();
            $table->decimal('total', 15, 2);
            $table->decimal('taxe_1', 8, 2)->default(0);
            $table->decimal('taxe_2', 8, 2)->default(0);
            $table->decimal('taxe_total', 8, 2)->default(0);
            $table->timestamps();

            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
        });
    }
    public function down(): void { Schema::dropIfExists('paniers');}
};
