<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plan_investissements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->decimal('montant', 15, 2);
            $table->integer('periode'); // en jours
            $table->decimal('benefice', 8, 2);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('plan_investissements');}
};
