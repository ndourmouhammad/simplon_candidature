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
        Schema::create('cohortes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->text('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('lieu_formation');
            $table->integer('nombre_participants');
            $table->timestamps();

            // Ajoute une colonne 'referentiel_id' de type entier non signé pour la clé étrangère
            $table->unsignedBigInteger('referentiel_id');
            // Définit 'referentiel_id' comme clé étrangère, liée à la colonne 'id' de la table 'referentiel'
            $table->foreign('referentiel_id')->references('id')->on('referentiels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprime la contrainte de clé étrangère 'cohortes_referentiel_id_foreign' avant de supprimer la colonne 'referentiel_id'
        Schema::table('cohortes', function (Blueprint $table) {
            $table->dropForeign('cohortes_referentiel_id_foreign');
            $table->dropColumn('referentiel_id');
        });

        Schema::dropIfExists('cohortes');
    }
};
