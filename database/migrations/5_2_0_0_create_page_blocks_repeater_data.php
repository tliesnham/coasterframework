<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageBlocksRepeaterData extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_blocks_repeater_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('row_key');
            $table->integer('block_id')->unsigned();
            $table->text('content');
            $table->integer('version');
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