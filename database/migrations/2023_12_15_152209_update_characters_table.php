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
        Schema::table('characters', function (Blueprint $table) {
            //creo la colonna della FK
            $table->unsignedBigInteger('race_id')->nullable()->after('id');
            //assegno la FK alla colonna creazione
            $table->foreign('race_id')
                ->references('id')
                ->on('races')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            //elimino la FK(metto il nome della colonna in una array)
            $table->dropForeign(['race_id']);
            //elimino la colonna della FK
            $table->dropColumn('race_id');
        });
    }
};
