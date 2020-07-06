<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsAttributesTable extends Migration
{
    public function up(): void
    {
        Schema::create('items_attributes', static function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('items_attributes', static function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id', 'items_attributes_item_id_foreign')
                ->references('id')
                ->on('items');
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id', 'items_attributes_attribute_id_foreign')
                ->references('id')
                ->on('attributes');
        });
    }

    public function down(): void
    {
        Schema::table('items_attributes', static function (Blueprint $table) {
            $table->dropForeign('items_attributes_item_id_foreign');
            $table->dropForeign('items_attributes_attribute_id_foreign');
        });
        Schema::dropIfExists('items_attributes');
    }
}
