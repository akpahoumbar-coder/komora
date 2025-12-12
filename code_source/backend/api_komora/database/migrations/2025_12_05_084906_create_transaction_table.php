<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('compte_depart');
            $table->decimal('montant', 15, 2);
            $table->string('compte_arrive');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('transactions');}
};
