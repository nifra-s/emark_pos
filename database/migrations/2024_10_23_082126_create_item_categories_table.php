<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_categories', function (Blueprint $table) {
            $table->id();
            $table->string('catagory_nm',30);
            $table->integer('cat_count')->default(0);
            $table->integer('order_id')->default(0);
            $table->string('ads',5)->default('N');
            $table->double('ads_price')->default(0);
            $table->string('catagory2_nm')->nullable(true);
            $table->text('icon')->nullable(true);
            $table->string('view_type',30)->default('Grid');
            $table->text('cat_attr')->nullable(true);
            $table->string('status',10)->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_categories');
    }
};
