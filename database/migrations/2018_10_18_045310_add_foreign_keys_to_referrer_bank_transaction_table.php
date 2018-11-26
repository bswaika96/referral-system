<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReferrerBankTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('referrer_bank_transaction', function(Blueprint $table)
		{
			$table->foreign('Referrer', 'FK_ReferrerBankTransaction_Person')->references('Id')->on('referrer')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('referrer_bank_transaction', function(Blueprint $table)
		{
			$table->dropForeign('FK_ReferrerBankTransaction_Person');
		});
	}

}
