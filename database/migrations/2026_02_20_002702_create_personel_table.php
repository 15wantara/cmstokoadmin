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
        Schema::create('personel', function (Blueprint $table) {
            $table->id();
            $table->integer('nipegawai');
            $table->string('nmlengkap');
            $table->enum('jkel', ['null', 'L', 'P']);
            $table->date('tgl_masuk');
            $table->enum('is_active', ['null', '0', '1', '2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personel');
    }
};
