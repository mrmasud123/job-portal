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
        Schema::table('job_lists', function (Blueprint $table) {
            $table->string('position');
            $table->string('location');
            $table->string('post_name');
            $table->double('salary');
            $table->string('job_type');
            $table->string('workplace_type');
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_lists', function (Blueprint $table) {
            //
        });
    }
};
