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
            $table->string("title");
            $table->string("slug");
            $table->bigInteger("brand_id")->unsigned();
            $table->text("summary");
            $table->longText("content");
            $table->string("thumbnail")->default("thumbnail.png");
            // seo field
            $table->tinyInteger("indexable")->default(1)->comment("0: Noindex,1: Index");
            $table->string("canonical")->comment("Canonical Url")->nullable();
            $table->string("seo_title")->nullable();
            $table->text("seo_description")->nullable();
            $table->string("seo_image")->nullable();
            $table->longText("schema")->nullable();
            $table->timestamps();

            $table->foreign("brand_id")->references("id")->on("brands")->onDelete('cascade');
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
