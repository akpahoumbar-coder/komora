<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produit_partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->string('photo_4')->nullable();
            $table->integer('rate')->default(0);
            $table->decimal('prix', 15, 2);
            $table->decimal('reduction', 8, 2)->nullable();
            $table->string('mensuration')->nullable();
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->integer('nb_achat')->default(0);
            $table->string('lien')->nullable();
            $table->integer('stock')->default(0);
            $table->integer('quantite');
            $table->decimal('taxe', 8, 2)->default(0);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('produit_partenaires');}
};