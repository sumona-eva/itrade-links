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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreignId('category_id')
            ->constrained('categories')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedInteger('brand_id')->nullable();


            $table->string('title');
            $table->string('slug');
            $table->string('cover_image');
            $table->string('hover_image')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('price');
            $table->integer('discount_price')->default(0);
            $table->string('sku');
            $table->string('bar_code')->nullable();
            $table->mediumText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('specification')->nullable();
            $table->integer('visited')->default(0);
            $table->integer('stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
