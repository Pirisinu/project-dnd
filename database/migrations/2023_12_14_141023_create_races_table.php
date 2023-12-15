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
            $table->tinyInteger('mod_str')->signed();
            $table->tinyInteger('mod_dex')->signed();
            $table->tinyInteger('mod_con')->signed();
            $table->tinyInteger('mod_int')->signed();
            $table->tinyInteger('mod_wis')->signed();
            $table->tinyInteger('mod_cha')->signed();
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
