<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReferralTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('referral_transaction', function(Blueprint $table)
		{
			$table->foreign('Referee', 'FK_ReferralTransaction_Person')->references('Id')->on('person')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('referral_transaction', function(Blueprint $table)
		{
			$table->dropForeign('FK_ReferralTransaction_Person');
		});
	}

}
