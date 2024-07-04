<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->string('lieu')->nullable();
            $table->date('date_evenement');
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->date('date_cloture_inscription')->nullable();
            $table->string('image')->nullable();
            $table->integer('nombre_places')->nullable();
            $table->enum('categorie', ['Art', 'Technologie', 'Sport', 'Santé', 'Éducation', 'Music', 'Conférences', 'Économie', 'Culture'])->nullable();
            $table->enum('statut', ['brouillon', 'publié', 'annulé', 'passer'])->default('brouillon')->comment('Statut de l\'événement');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
