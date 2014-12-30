<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Avsnitt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('episode', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('url');
			$table->string('participants');
			$table->string('keywords');
			$table->string('image');
			$table->string('description');
			$table->string('length');
			$table->timestamp('deleted_at');
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('created_at');
			$table->integer('views');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
