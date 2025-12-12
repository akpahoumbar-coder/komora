<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('affilies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('photo')->nullable();
            $table->string('code_promo')->unique();
            $table->string('code_parain')->nullable();
            $table->string('lien')->nullable();
            $table->integer('clic_week')->default(0);
            $table->integer('clic_mois')->default(0);
            $table->integer('clic')->default(0);
            $table->decimal('commission_week', 15, 2)->default(0);
            $table->decimal('commission_mois', 15, 2)->default(0);
            $table->decimal('commission', 15, 2)->default(0);
            $table->integer('rang')->default(0);
            $table->integer('nbr_aff')->default(0);
            $table->decimal('solde', 15, 2)->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    public function down(): void { Schema::dropIfExists('affilies');}
};
