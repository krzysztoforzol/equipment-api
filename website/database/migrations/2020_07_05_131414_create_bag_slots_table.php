<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagSlotsTable extends Migration
{
    public function up(): void
    {
        Schema::create('bag_slots', static function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('bag_slots', static function (Blueprint $table) {
            $table->unsignedBigInteger('bag_id');
            $table->foreign('bag_id', 'bag_slots_bag_id_foreign')
                ->references('id')
                ->on('bags');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id', 'bag_slots_item_id_foreign')
                ->references('id')
                ->on('items');
        });
    }

    public function down(): void
    {
        Schema::table('bag_slots', static function (Blueprint $table) {
            $table->dropForeign('bag_slots_bag_id_foreign');
            $table->dropForeign('bag_slots_item_id_foreign');
        });
        Schema::dropIfExists('bag_slots');
    }
}
