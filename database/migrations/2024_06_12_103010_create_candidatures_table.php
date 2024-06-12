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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->text('biographie');
            $table->text('motivation');
            $table->enum('statut', ['en attente', 'rejeté','accepté'])->default('en attente');
            $table->date('date_decision');
            $table->date('date_limite');
            // date soumission
            $table->timestamps();

            // Ajoute une colonne 'user_id' de type entier non signé pour la clé étrangère
            $table->unsignedBigInteger('user_id');
            // Définit 'user_id' comme clé étrangère, liée à la colonne 'id' de la table 'users'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            // Ajoute une colonne 'cohorte_id' de type entier non signé pour la clé étrangère
            $table->unsignedBigInteger('cohorte_id');
            // Définit 'cohorte_id' comme clé étrangère, liée à la colonne 'id' de la table 'cohorte'
            $table->foreign('cohorte_id')->references('id')->on('cohortes')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprime la contrainte de clé étrangère 'candidatures_user_id_foreign' avant de supprimer la colonne 'user_id'
        Schema::table('candidatures', function (Blueprint $table) {
            $table->dropForeign('candidatures_user_id_foreign');
            $table->dropColumn('user_id');
        });

        // Supprime la contrainte de clé étrangère 'candidatures_cohorte_id_foreign' avant de supprimer la colonne 'cohorte_id'
        Schema::table('candidatures', function (Blueprint $table) {
            $table->dropForeign('candidatures_cohorte_id_foreign');
            $table->dropColumn('cohorte_id');
        });

        

        Schema::dropIfExists('candidatures');
    }
};
