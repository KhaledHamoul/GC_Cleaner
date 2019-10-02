<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoubelleTable extends Migration {

	public function up()
	{
		Schema::create('Poubelle', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('niveau');
			$table->string('lat');
			$table->string('lng');
			$table->float('taille');
			$table->integer('id_pidiaterie')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Poubelle');
	}
}