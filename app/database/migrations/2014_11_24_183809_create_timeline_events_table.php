<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timeline_events', function($table) {
			$table->increments('id');
			$table->date('date');
			$table->string('title');
			$table->text('text');
			$table->string('file_name');
			$table->string('content_type')->nullable();
			$table->string('file_size')->nullable();
			$table->boolean('active')->default(1);
			$table->timestamps();
			// english fields
			$table->string('title_en');
			$table->text('text_en');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('timeline_events');
	}

}
