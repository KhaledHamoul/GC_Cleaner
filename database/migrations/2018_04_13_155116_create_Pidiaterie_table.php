<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePidiaterieTable extends Migration {

	public function up()
	{
		Schema::create('Pidiaterie', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('raison_sociale');
			$table->string('lat');
			$table->string('lng');
			$table->string('tel');
			$table->string('email');
			$table->string('username');
			$table->string('passeword');
		});
	}

	public function down()
	{
		Schema::drop('Pidiaterie');
	}
}