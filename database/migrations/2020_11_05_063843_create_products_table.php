<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 255);
            $table->string('img', 512);
            $table->text('description');
            $table->integer('price');
            $table->char('supplier')->nullable();
            $table->integer('supplier_price')->nullable();
            $table->char('type', 50)->nullable();
            $table->integer('print_in_month');
            $table->char('format', 50)->nullable();
            $table->smallInteger('pages')->nullable();
            $table->char('editor', 255)->nullable();
            $table->char('typography', 255)->nullable();
            $table->integer('relevance')->default(0);
            $table->char('seo_url', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
