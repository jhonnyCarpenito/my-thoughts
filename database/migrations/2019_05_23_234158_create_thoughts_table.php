<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThoughtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thoughts', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('description');

            $table->integer('user_id')->unsigned();
            //$table->foreign('user_id')->reference('id')->on('users');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('thoughts');
    }
}
