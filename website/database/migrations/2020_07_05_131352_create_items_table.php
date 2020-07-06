<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up(): void
    {
        Schema::create('items', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('items', static function (Blueprint $table) {
            $table->unsignedBigInteger('item_type_id');
            $table->foreign('item_type_id', 'item_types_id_foreign')
                ->references('id')
                ->on('item_types');
        });

    }

    public function down(): void
    {
        Schema::table('items', static function (Blueprint $table) {
            $table->dropForeign('item_types_id_foreign');
        });
        Schema::dropIfExists('items');
    }
}
