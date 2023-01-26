<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("detail_id")->unsigned();
            $table->bigInteger("inventory_id")->unsigned();
            $table->bigInteger("currency_id")->unsigned();
            $table->decimal("price",10,0);
            $table->integer("quantity")->unsigned()->default(0);
            $table->timestamp("register_date")->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamps();

            $table->foreign("detail_id")->references("id")->on("product_details")->onDelete('cascade');
            $table->foreign("inventory_id")->references("id")->on("inventories")->onDelete('cascade');
            $table->foreign("currency_id")->references("id")->on("currencies")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_items');
    }
}
