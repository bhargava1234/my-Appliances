<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_appliance_id');
            $table->unique('pro_appliance_id');
            $table->string('pro_external_id');
            $table->string('pro_title');
            $table->string('pro_description');
            $table->text('pro_image');
            $table->string('pro_category');
            $table->integer('pro_price_amount');
            $table->string('pro_price_currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
