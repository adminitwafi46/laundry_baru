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
        Schema::create('item_laundries', function (Blueprint $table) {
            $table->id();
            //item name
            $table->string('name');
            //item price, int, default 0
            $table->integer('price')->default(0);
            //barcode
            $table->string('barcode')->nullable();
            //item description, nullable
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_laundries');
    }
};
