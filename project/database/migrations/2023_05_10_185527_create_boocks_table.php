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
            $table->string("image");
            $table->string("nom");
            $table->string("class");
            $table->string("longage");
            $table->string("societe");
            $table->string("radmk");
            $table->date("date-isdar");
            $table->string("page");
            $table->string("volum");
            $table->string("type");
            $table->date("date-creat");

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
