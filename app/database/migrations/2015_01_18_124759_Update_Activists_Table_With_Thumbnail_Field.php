<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateActivistsTableWithThumbnailField extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activists', function(Blueprint $table)
		{
			$table->string('thumbnail');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('activists', function(Blueprint $table)
		{
			$table->dropColumn('thumbnail');
		});
	}

}