<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Poubelle', function(Blueprint $table) {
			$table->foreign('id_pidiaterie')->references('id')->on('Pidiaterie')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('NiveauSauvegarde', function(Blueprint $table) {
			$table->foreign('id_poubelle')->references('id')->on('Poubelle')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Notif', function(Blueprint $table) {
			$table->foreign('id_pidiaterie')->references('id')->on('Pidiaterie')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Notif', function(Blueprint $table) {
			$table->foreign('id_poubelle')->references('id')->on('Poubelle')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Poubelle', function(Blueprint $table) {
			$table->dropForeign('Poubelle_id_pidiaterie_foreign');
		});
		Schema::table('NiveauSauvegarde', function(Blueprint $table) {
			$table->dropForeign('NiveauSauvegarde_id_poubelle_foreign');
		});
		Schema::table('Notif', function(Blueprint $table) {
			$table->dropForeign('Notif_id_pidiaterie_foreign');
		});
		Schema::table('Notif', function(Blueprint $table) {
			$table->dropForeign('Notif_id_poubelle_foreign');
		});
	}
}