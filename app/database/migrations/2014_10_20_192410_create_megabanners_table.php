<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMegabannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('megabanners', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('text');
			$table->string('url');
			$table->tinyInteger('position')->default(0);
			$table->string('file_name');
			$table->string('content_type')->nullable();
			$table->string('file_size')->nullable();
			$table->boolean('active')->default(1);
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
		Schema::drop('megabanners');
	}

}
