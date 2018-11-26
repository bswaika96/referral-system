<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReferralCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('referral_code', function(Blueprint $table)
		{
			$table->foreign('Referrer', 'FK_ReferralCode_Referrer')->references('Id')->on('referrer')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('referral_code', function(Blueprint $table)
		{
			$table->dropForeign('FK_ReferralCode_Referrer');
		});
	}

}
