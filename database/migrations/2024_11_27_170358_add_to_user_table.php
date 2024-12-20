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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username')->nullable()->unique();
            $table->string('token')->nullable();
            $table->string('status')->nullable();
            $table->string('activation_code')->nullable();
            $table->string('role')->nullable()->default(0);
            $table->string('avatar')->nullable();
            $table->string('activation_expires_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
