<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotifTable extends Migration {

	public function up()
	{
		Schema::create('Notif', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('type');
			$table->integer('id_pidiaterie')->unsigned();
			$table->integer('id_poubelle')->unsigned();
			$table->integer('niveau');
		});
	}

	public function down()
	{
		Schema::drop('Notif');
	}
}