<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('RENAME TABLE user TO users');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('RENAME TABLE users TO user');
    }
};
