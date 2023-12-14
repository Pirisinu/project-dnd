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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 50);
            $table->text('description');
            $table->tinyInteger('Mod_str')->signed();
            $table->tinyInteger('Mod_dex')->signed();
            $table->tinyInteger('Mod_con')->signed();
            $table->tinyInteger('Mod_int')->signed();
            $table->tinyInteger('Mod_wis')->signed();
            $table->tinyInteger('Mod_cha')->signed();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
