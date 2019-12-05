<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableCarritoAddPriceProductColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('carrito', function (Blueprint $table) {;
        $table->unsignedDecimal('product_price', 6, 2);
        $table->string('product_name', 255);
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropColumn('product_price');
      $table->dropColumn('product_name');
    }
}
