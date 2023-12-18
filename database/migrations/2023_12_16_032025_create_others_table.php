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
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->string('version')->nullable();
            $table->string('dimension',50)->nullable();
            $table->double('weight',9,3)->nullable();
            $table->date('date_exp')->nullable();
            $table->string('color',30)->nullable();
            $table->string('extra_1')->nullable();
            $table->string('extra_2')->nullable();
            $table->integer('extra_3')->nullable();
            $table->integer('extra_4')->nullable();
            $table->double('extra_5')->nullable();
            $table->double('extra_6')->nullable();
            $table->boolean('extra_7')->nullable();
            $table->boolean('extra_8')->nullable();
            $table->text('extra_9')->nullable();

            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('others');
    }
};
