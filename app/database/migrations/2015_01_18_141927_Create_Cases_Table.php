<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cases', function(Blueprint $table)
		{
                        $table->increments('id');
                        $table->string('name');
                        $table->enum('type', array('Trial','Arrest', 'Imprison', 'Hunger Strike', 'Summons', 'Torture', 'Exile', 'Detention', 'Home Detention', 'Suspension from School', 'Termination of Employment', 'Execution', 'Other', 'Solitary Confinement', 'Suspicious Death', 'Kill'));
                        $table->integer('activist_id');        
                        $table->string('notes');                
                        $table->integer('admin_id');                     
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
		Schema::drop('cases');
	}

}