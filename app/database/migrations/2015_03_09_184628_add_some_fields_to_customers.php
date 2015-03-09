<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeFieldsToCustomers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::table('customers', function(Blueprint $table)
			{
				  $table->string('password', 64);
	        $table->string('lastname', 100);
	        //$table->strint('remember_token', 100);
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::table('customers', function(Blueprint $table)
	    {
	    		$table->dropColumn('password', 64);
					$table->dropColumn('lastname', 100);
					//$table->dropColumn('remember_token', 100);
	    });
	}

}
