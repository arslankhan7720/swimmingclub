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
            $table->string('username')->unique();
            $table->string('forename');
            $table->string('surname');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('phone_no');
            $table->string('postcode');
            // You may want to create a foreign key to a roles table for role assignment
            $table->string('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
