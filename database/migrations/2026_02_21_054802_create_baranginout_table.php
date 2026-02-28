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
        Schema::create('baranginout', function (Blueprint $table) {
            $table->id();
            $table->string('barcodeinout');
            $table->integer('product_id');
            $table->integer('supplier_id');
            $table->enum('statusbrg', ['null', 'in', 'out']);
            $table->date('brg_masuk');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baranginout');
    }
};
