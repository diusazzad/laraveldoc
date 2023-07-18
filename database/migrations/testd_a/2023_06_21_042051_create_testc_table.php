<?php

use App\Models\TestC;
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
        Schema::connection('testd_a')->create('testc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('testb_id')->constrained('testb');
            $table->foreignIdFor(TestC::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('testd_a')->dropIfExists('testc');
    }
};
