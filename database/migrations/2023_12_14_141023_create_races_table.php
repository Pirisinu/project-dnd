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
            $table->text('descriptoion');
            $table->tinyInteger('Mod_str')->unsigned();
            $table->tinyInteger('Mod_dex')->unsigned();
            $table->tinyInteger('Mod_con')->unsigned();
            $table->tinyInteger('Mod_int')->unsigned();
            $table->tinyInteger('Mod_wis')->unsigned();
            $table->tinyInteger('Mod_cha')->unsigned();
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