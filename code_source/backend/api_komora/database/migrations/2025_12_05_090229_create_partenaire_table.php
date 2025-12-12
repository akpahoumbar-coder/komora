<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('adresse')->nullable();
            $table->string('expertise')->nullable();
            $table->integer('nombre_follower')->default(0);
            $table->unsignedBigInteger('produit_partenaire_id')->nullable();
            $table->boolean('est_verifie')->default(false);
            $table->integer('rate_combine')->default(0);
            $table->date('date_ajout');
            $table->text('emploi_du_temps')->nullable();
            $table->unsignedBigInteger('patenaire_stat_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    public function down(): void 
    { 
        Schema::dropIfExists('partenaires');
    }
};
