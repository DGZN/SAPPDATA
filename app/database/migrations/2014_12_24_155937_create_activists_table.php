<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		/*

		{
			_token: "RT0NPIBceuwsdEtQVnfjieVqkdWXPWvQORLvu3ds",
			first_name: "First Name",
			last_name: "Last Name",
			nickname: "KLD",
			date_of_birth: "12 15 1988",
			maritalStatus: "divorced",
			gender: "male",
			cityOfBirth: "Chiba",
			cityOfResidence: "glencoe",
			firstNameArabLit: "firstName_Arabic",
			lastNameArabLit: "lastName_Arabic",
			occupation: "Engineer",
			notes: "General Notes",
			adminNotes: "Admin Notes",
			thumbnail: { }
		}

		*/

		
		Schema::create('activists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
            $table->string('last_name');
            $table->string('nickname');
            $table->string('date_of_birth');
            $table->enum('maritalStatus', array('Single', 'Married', 'Widowed', 'Divorced', 'Separated'));
            $table->enum('gender', array('Female', 'Male'));
            $table->string('cityOfBirth');                        
            $table->string('cityOfResidence');                                                
            $table->string('firstNameArabLit');                        
            $table->string('lastNameArabLit');                                              
            $table->string('occupation');                        
            $table->string('notes');                        
            $table->longText('adminNotes');                        
            $table->string('admin_id');                                   
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
		Schema::drop('activists');
	}

}
