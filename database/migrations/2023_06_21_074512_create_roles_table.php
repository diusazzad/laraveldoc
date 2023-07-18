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
        Schema::connection('testd')->create('roles', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('role_id');
            $table->string('role_name');
            $table->string('role_slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('testd')->dropIfExists('roles');
    }
};
