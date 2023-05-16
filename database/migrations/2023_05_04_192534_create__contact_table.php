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
        Schema::create('_contact', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('address',255);
            $table->text('iframe');
            $table->string('phone',255);
            $table->string('email',255);
            $table->string('date',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_contact');
    }
};
