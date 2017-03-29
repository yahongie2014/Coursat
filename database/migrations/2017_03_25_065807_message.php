<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Message extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('message', function(Blueprint $table) {
			$table->increments('id');
			$table->string('user_name')->index();
			$table->string('Title')->index();
			$table->string('mssg', 255);
			$table->string('phone', 255)->index();
			$table->rememberToken();
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
		Schema::drop('message');
    }
}
