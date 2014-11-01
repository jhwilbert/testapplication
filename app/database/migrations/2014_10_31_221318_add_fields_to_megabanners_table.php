<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToMegabannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('megabanners', function(Blueprint $table)
		{
			// areas
			$table->boolean('show_in_home')->default(1);
			$table->boolean('show_in_company')->default(0);
			$table->boolean('show_in_projects')->default(0);
			$table->boolean('show_in_solutions')->default(0);
			$table->boolean('show_in_clients')->default(0);
			$table->boolean('show_in_contact')->default(0);
			$table->boolean('show_in_newsfeed')->default(0);
			// english fields
			$table->string('title_en');
			$table->text('text_en');
			$table->string('url_en');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('megabanners', function(Blueprint $table)
		{
			// areas
			$table->dropColumn('show_in_home');
			$table->dropColumn('show_in_company');
			$table->dropColumn('show_in_projects');
			$table->dropColumn('show_in_solutions');
			$table->dropColumn('show_in_clients');
			$table->dropColumn('show_in_contact');
			$table->dropColumn('show_in_newsfeed');
			// english fields
			$table->dropColumn('title_en');
			$table->dropColumn('text_en');
			$table->dropColumn('url_en');
		});
	}

}
