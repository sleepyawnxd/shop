<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->text('short_description');
            $table->text('description');
            $table->string('brand');
            $table->string('preview_image');
            $table->string('second_image');
            $table->string('third_image');
            $table->float('price');
            $table->float('old_price')->nullable();
            $table->integer('moderation');
            $table->integer('partner_id');
            $table->integer('s')->nullable();
            $table->integer('m')->nullable();
            $table->integer('x')->nullable();
            $table->integer('xl')->nullable();
            $table->timestamps();


            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->index('subcategory_id','product_subcategory_idx');
            $table->foreign('subcategory_id','post_subcategory_fk')->on('sub_categories')->references('id');
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
};
