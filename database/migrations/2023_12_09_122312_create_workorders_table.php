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
        Schema::create('workorders', function (Blueprint $table) {
            $table->id();
            $table->integer('workorder');
            $table->foreignId('branch_id')->constrained('branches')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('date')->nullable();
            $table->string('company_name')->nullable();
            $table->decimal('amount', 10,2)->nullable();
            $table->decimal('quantity_number', 10,2)->nullable();
            $table->string('salesman')->nullable();
            $table->string('project_name')->nullable();
            $table->string('remarks')->nullable();
            $table->date('delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workorders');
    }
};
