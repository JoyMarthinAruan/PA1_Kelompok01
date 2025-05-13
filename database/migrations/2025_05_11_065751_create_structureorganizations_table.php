<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('structureorganizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('degree')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('structureorganizations')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('structureorganizations');
    }
};
