<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ino')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->date('dob')->nullable();
            $table->string('propic')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['ino',  'mobile', 'address','city','dob','propic']);
        });
    }
}
