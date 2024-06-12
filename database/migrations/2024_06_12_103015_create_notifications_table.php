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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('objet');
            $table->text('message');

            // date_heure_envoi
            $table->timestamps();

           

            // Ajoute une colonne 'candidature_id' de type entier non signé pour la clé étrangère
            $table->unsignedBigInteger('candidature_id');
            // Définit 'candidature_id' comme clé étrangère, liée à la colonne 'id' de la table 'candidature'
            $table->foreign('candidature_id')->references('id')->on('candidatures')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        

        // Supprime la contrainte de clé étrangère 'notifications_candidature_id_foreign' avant de supprimer la colonne 'candidature_id'
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_candidature_id_foreign');
            $table->dropColumn('candidature_id');
        });

        Schema::dropIfExists('notifications');
    }
};
