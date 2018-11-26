<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReferrerBankAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('referrer_bank_account', function(Blueprint $table)
		{
			$table->foreign('BankCode', 'FK_ReferralBankAccount_Bank')->references('Code')->on('bank')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Referrer', 'FK_ReferralBankAccount_Person')->references('Id')->on('referrer')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('referrer_bank_account', function(Blueprint $table)
		{
			$table->dropForeign('FK_ReferralBankAccount_Bank');
			$table->dropForeign('FK_ReferralBankAccount_Person');
		});
	}

}
