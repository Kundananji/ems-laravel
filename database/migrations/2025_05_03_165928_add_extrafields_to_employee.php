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
        Schema::table('employee', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->string('Man_No')->primary();
            $table->string('Name',200);
            $table->string('Email_Address',100);
            $table->integer('Department_Id')->nullable();
            $table->string("Supervisor",10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->dropColumn('Man_No');
            $table->dropColumn('Name');
            $table->dropColumn('Email_Address');
            $table->dropColumn('Department_Id');
            $table->dropColumn("Supervisor");
        });
    }
};
