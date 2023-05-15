<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boocks', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("nom")->nullable();
            $table->string("class")->nullable();
            $table->string("longage")->nullable();
            $table->string("societe")->nullable();
            $table->string("radmk")->nullable();
            $table->date("date-isdar")->nullable();
            $table->string("page")->nullable();
            $table->string("volum")->nullable();
            $table->string("type")->nullable();
            $table->date("date-creat")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boocks');
    }
};
