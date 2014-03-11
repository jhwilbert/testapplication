<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_images', function($table) {
			$table->increments('id');
			$table->integer('project_id');
			$table->string('subtitle')->nullable();
			$table->tinyInteger('position')->default(0);
			$table->string('file_name');
			$table->string('content_type')->nullable();
			$table->string('file_size')->nullable();
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
		Schema::drop('project_images');
	}

}
