<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferrerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referrer', function(Blueprint $table)
		{
			$table->increments('Id')->comment('System ID');
			$table->integer('Person')->unsigned()->comment('Person ID');
			$table->integer('Points')->unsigned()->nullable()->default(0)->comment('Referrer Point Balances');
			$table->boolean('Active')->nullable()->default(1)->comment('Is active referee?');
			$table->timestamp('LastChanged')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Last Changed');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referrer');
	}

}
