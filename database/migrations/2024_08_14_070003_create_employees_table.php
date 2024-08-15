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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');

            // $table->unsignedBigInteger('devision_id');
            // $table->foreign('devision_id')->references('id')->on('devisions');

            $table->foreignId('devision_id')->constrained(
                table: 'devisions', indexName: 'employee_devision_id'
            );

            $table->string('position');
            $table->integer('salary');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
