<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageBlocksRepeaterRows extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_blocks_repeater_rows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repeater_id')->unsigned();
            $table->integer('row_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('page_blocks_repeater_rows', function (Blueprint $table) {
            $table->foreign('repeater_id')
                  ->references('id')->on('block_repeaters')
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