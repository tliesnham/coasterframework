<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormSubmissions extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_block_id')->unsigned();
            $table->integer('from_page_id')->unsigned();
            $table->text('content');
            $table->boolean('sent');
            $table->timestamps();
        });

        Schema::table('form_submissions', function (Blueprint $table) {
            $table->foreign('form_block_id')
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