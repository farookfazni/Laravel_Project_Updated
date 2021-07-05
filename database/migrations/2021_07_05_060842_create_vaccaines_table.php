<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccaines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('ino')->nullable();
            $table->string('name')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('dose')->nullable();
            $table->string('vactype')->nullable();
            $table->date('vacdate')->nullable();
            $table->time('vactime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vaccaines', function (Blueprint $table) {
            $table->dropColumn(['user_id','ino', 'name',  'mobile', 'address','dose', 'vactype', 'vacdate', 'vactime']);
        });
    }
}
