<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mensurations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type_1')->nullable();
            $table->string('type_2')->nullable();
            $table->string('type_3')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('mensurations');}
};
