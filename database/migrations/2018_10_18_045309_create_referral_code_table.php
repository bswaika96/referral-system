<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferralCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referral_code', function(Blueprint $table)
		{
			$table->increments('Id')->comment('System ID');
			$table->integer('Referrer')->unsigned()->index('FK_ReferralCode_Person')->comment('Referrer ID');
			$table->string('Code', 64)->comment('Referral Long Code (SHA256)');
			$table->string('ShortCode', 8)->comment('Referral Short Code (CRC32)');
			$table->timestamp('LastChanged')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Referral Code Last Changed Time');
			$table->unique(['Code','ShortCode'], 'Code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referral_code');
	}

}
