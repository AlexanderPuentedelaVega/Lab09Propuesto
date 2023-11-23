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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('portada')->nullable();
            $table->string("nombre");
            $table->string("autor");
            $table->string("editorial");
            $table->integer("precio");
            $table->integer("stock");
            $table->date("fecha_publicacion");
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("categoria");
            $table->unsignedBigInteger("autor_id");
            $table->foreign("autor_id")->references("id")->on("_autor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
