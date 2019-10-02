<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNiveauSauvegardeTable extends Migration {

	public function up()
	{
		Schema::create('NiveauSauvegarde', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('niveau');
			$table->integer('id_poubelle')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('NiveauSauvegarde');
	}
}