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
        Schema::create('sell', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 100)->nullable();
            $table->integer('quantity')->nullable();
            $table->double('grain')->nullable();
            $table->double('price')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell');
    }
};
