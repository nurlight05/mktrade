<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('fname', 50);
            $table->char('lname', 50);
            $table->string('email', 320);
            $table->char('phone', 30);
            $table->char('cname', 100)->nullable();
            $table->char('bin', 30)->nullable();
            $table->char('address', 255);
            $table->enum('type', [0, 1])->default(0);
            $table->char('password', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
