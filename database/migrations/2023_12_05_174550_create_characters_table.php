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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 50);
            $table->string('height', 10);
            $table->string('weight', 10);
            $table->text('background');
            $table->string('image');
            $table->tinyInteger('armor_class')->unsigned();
            $table->tinyInteger('str')->unsigned();
            $table->tinyInteger('dex')->unsigned();
            $table->tinyInteger('con')->unsigned();
            $table->tinyInteger('int')->unsigned();
            $table->tinyInteger('wis')->unsigned();
            $table->tinyInteger('cha')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
