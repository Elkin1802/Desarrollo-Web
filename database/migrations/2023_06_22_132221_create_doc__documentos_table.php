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
        Schema::create('doc__documentos', function (Blueprint $table) {
            $table->id();
            $table->string('doc_nombre', 60);
            $table->integer('doc_codigo');
            $table->string('doc_contenido', 4000);

            $table->unsignedBigInteger('doc_id_tipo');
            $table->unsignedBigInteger('doc_id_proceso');

            $table->foreign('doc_id_proceso')->references('id')->on('pro__procesos')->onDelete('cascade');

            $table->foreign('doc_id_tipo')->references('id')->on('tip__tipo__docs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc__documentos');
    }
};
