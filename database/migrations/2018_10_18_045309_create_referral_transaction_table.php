<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferralTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referral_transaction', function(Blueprint $table)
		{
			$table->increments('id')->comment('System ID');
			$table->integer('Referee')->unsigned()->index('FK_ReferralTransaction_Person')->comment('Person who used Referral Code');
			$table->string('Code', 64)->comment('Long Referral Code');
			$table->timestamp('TransactionTime')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Transaction Time');
			$table->integer('Points')->unsigned()->nullable()->default(0)->comment('Points given in this transaction');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referral_transaction');
	}

}
