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
            $table->integer('row_key')->unsigned();
            $table->integer('block_id')->unsigned();
            $table->text('content');
            $table->integer('version')->unsigned();
            $table->timestamps();
        });

        Schema::table('page_blocks_repeater_data', function (Blueprint $table) {
            $table->foreign('block_id')
                  ->references('id')->on('blocks')
                  ->onDelete('cascade');
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