<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('price');
            $table->char('phone', 30)->nullable();
            $table->string('email', 320)->nullable();
            $table->char('index', 30)->nullable();
            $table->char('region', 255)->nullable();
            $table->char('city', 255)->nullable();
            $table->char('street', 255)->nullable();
            $table->char('home', 255)->nullable();
            $table->char('apartment', 255)->nullable();
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
