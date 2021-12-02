<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMenusHasItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus_has_items', function (Blueprint $table) {
            $table->foreign('item_id', 'fk_menus_has_items_items1')->references('id')->on('items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('menu_id', 'fk_menus_has_items_menus1')->references('id')->on('menus')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus_has_items', function (Blueprint $table) {
            $table->dropForeign('fk_menus_has_items_items1');
            $table->dropForeign('fk_menus_has_items_menus1');
        });
    }
}
