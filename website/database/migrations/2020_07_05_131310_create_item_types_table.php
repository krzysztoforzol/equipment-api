<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTypesTable extends Migration
{
    public function up(): void
    {
        Schema::create('item_types', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbr');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_types');
    }
}
