<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('livreurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('photo')->nullable();
            $table->boolean('est_verifie')->default(false);
            $table->decimal('commission_mois', 15, 2)->default(0);
            $table->decimal('commission', 15, 2)->default(0);
            $table->integer('nbr_attribue')->default(0);
            $table->integer('nb_effectuee')->default(0);
            $table->string('position')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    public function down(): void { Schema::dropIfExists('livreurs');}
};