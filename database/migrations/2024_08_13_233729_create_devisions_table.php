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
        Schema::create('devisions', function (Blueprint $table) {
            $table->id();
            $table->string('devision');
            // $table->integer('employee_id')->nullable();
            
            // $table->foreignId('employee_id')->constrained(
            //     table: 'employees', indexName: 'devision_employee_id'
            // );
            $table->string('jobs');
            $table->string('projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devisions');
    }
};
