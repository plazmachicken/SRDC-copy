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
        Schema::table('geoinfos', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });

        Schema::table('infos', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });

        Schema::table('util_infos', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });

        Schema::table('patinfos', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });

        Schema::table('industs', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });

        Schema::table('copyinfos', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('copyinfos', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });

        Schema::table('industs', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });

        Schema::table('patinfos', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });

        Schema::table('util_infos', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });

        Schema::table('infos', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });

        Schema::table('geoinfos', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });
    }
};
