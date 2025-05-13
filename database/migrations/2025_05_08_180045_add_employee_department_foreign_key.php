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
           $table->foreign('Department_Id')->references('Id')->on('department');
                  
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::table('employee', function (Blueprint $table) { 
            $table->dropForeign(['Department_Id']);
          });
    }
};
