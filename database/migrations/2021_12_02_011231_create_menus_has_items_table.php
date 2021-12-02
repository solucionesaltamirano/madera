<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusHasItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_has_items', function (Blueprint $table) {
            $table->unsignedTinyInteger('menu_id')->index('fk_menus_has_items_menus1_idx');
            $table->unsignedSmallInteger('item_id')->index('fk_menus_has_items_items1_idx');
            $table->unsignedSmallInteger('order')->nullable();
            $table->primary(['menu_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_has_items');
    }
}
