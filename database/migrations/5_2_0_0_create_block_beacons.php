<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockBeacons extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_beacons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id');
            $table->integer('page_id')->unsigned();
            $table->text('url');
            $table->integer('removed')->default(0);
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