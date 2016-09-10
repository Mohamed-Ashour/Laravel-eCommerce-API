<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Products
 *
 * @author  The scaffold-interface created at 2016-09-08 07:06:51pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table){

        $table->increments('id');

        $table->String('name');

        $table->float('price');

        $table->integer('quantity');

        /**
         * Foreignkeys section
         */

        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');


        $table->timestamps();


        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
