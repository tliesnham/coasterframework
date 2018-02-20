<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageGroup extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('item_name');
            $table->integer('default_parent')->unsigned();
            $table->integer('default_template')->unsigned();
            $table->integer('order_by_attribute_id')->nullable();
            $table->string('order_dir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}