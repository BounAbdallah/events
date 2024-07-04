<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('id_evenement')->constrained('evenements')->onDelete('cascade');
            // $table->foreignId('id_user')->constrained()->onDelete('cascade');
            // $table->enum('statut', ['en attente', 'confirmée', 'annulée'])->default('en attente');
            // $table->timestamps();
        });
    }

    public function down()
    {
        // Schema::dropIfExists('reservations');
    }
}
