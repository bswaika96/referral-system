<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferrerBankAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referrer_bank_account', function(Blueprint $table)
		{
			$table->increments('Id')->comment('System ID');
			$table->integer('Referrer')->unsigned()->index('FK_ReferralBankAccount_Person')->comment('Referrer ID');
			$table->integer('BankCode')->unsigned()->index('FK_ReferralBankAccount_Bank')->comment('Bank ID');
			$table->integer('BankAccountNumber')->comment('Bank Account Number');
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
		Schema::drop('referrer_bank_account');
	}

}
