<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person', function(Blueprint $table)
		{
			$table->increments('Id')->comment('System ID');
			$table->integer('IdentityNumber')->unique('IdentityNumber')->comment('Identity Number (id: NIK)');
			$table->string('Name', 64)->comment('Referrer Name');
			$table->string('POB', 32)->comment('Place of Birth');
			$table->date('DOB')->comment('Date of Birth');
			$table->enum('Gender', array('MALE','FEMALE'))->comment('Referrer Gender');
			$table->enum('BloodType', array('A','B','AB','0'))->comment('Referrer Blood Type');
			$table->text('Address', 65535)->comment('Referrer Address');
			$table->enum('Religion', array('ISLAM','PROTESTANT','CATHOLIC','HINDUISM','BUDDHISM','CONFUCIANISM','OTHER'))->comment('Religion Definition');
			$table->string('Martial', 64)->comment('Referrer Martial Status');
			$table->string('Job', 64)->comment('Referrer Job');
			$table->enum('Citizenship', array('WNI','WNA'))->comment('Referrer Citizenship Status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('person');
	}

}
