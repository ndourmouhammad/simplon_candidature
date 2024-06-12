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
        Schema::create('competence_referentiel', function (Blueprint $table) {
            $table->id();

            // Ajoute une colonne 'competence_id' de type entier non signé pour la clé étrangère
            $table->unsignedBigInteger('competence_id');
            // Définit 'competence_id' comme clé étrangère, liée à la colonne 'id' de la table 'competences'
            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade')->onUpdate('cascade');


            // Ajoute une colonne 'referentiel_id' de type entier non signé pour la clé étrangère
            $table->unsignedBigInteger('referentiel_id');
            // Définit 'referentiel_id' comme clé étrangère, liée à la colonne 'id' de la table 'referentiels'
            $table->foreign('referentiel_id')->references('id')->on('referentiels')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         // Supprime les contraintes de clé étrangère avant de supprimer la table
         Schema::table('competence_referentiel', function (Blueprint $table) {
            $table->dropForeign(['competence_id']);
            $table->dropForeign(['referentiel_id']);
        });

        Schema::dropIfExists('competence_referentiel');
    }
};
