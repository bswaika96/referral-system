<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferrerBankTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referrer_bank_transaction', function(Blueprint $table)
		{
			$table->increments('Id')->comment('System ID');
			$table->integer('Referrer')->unsigned()->index('FK_ReferrerBankTransaction_Person')->comment('Referrer ID');
			$table->integer('BankAccount')->unsigned()->comment('Bank Account ID');
			$table->integer('Points')->nullable()->default(0)->comment('Points to be redeemed');
			$table->timestamp('TransactionTime')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Transaction Time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referrer_bank_transaction');
	}

}
