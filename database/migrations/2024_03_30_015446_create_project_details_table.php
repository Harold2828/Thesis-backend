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
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean("is_active")->nullable(false)->default(true);
            $table->string("specification_value", 500);
            $table->string("data_type");
            $table->foreignId("project_id")->constrained("projects");
            $table->foreignId("specification_id")->constrained("specifications");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_details');
    }
};
