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
        Schema::create('pg_records', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->bigInteger('link_id', false, true);
	        $table->string('link_type', 32);
            $table->json('data')->nullable();
            $table->timestamps();

            $table->unique(['link_id', 'link_type']);

            $table->index([
                'created_at',
                'updated_at',
                'link_id',
                'link_type',
            ], 'pg_table_full_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pg_records');
    }
};
