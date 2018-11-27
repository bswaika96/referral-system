<?php

use Faker\Generator as Faker;
use App\Bank;
use App\Person;

$factory->define(Bank::class, function (Faker $faker) {
    return [
		'Code' => $faker->unique()->numberBetween(1, 999),
		'Name' => $faker->company
	];
});

$factory->define(Person::class, function (Faker $faker) {
    $genderSelector = array('MALE','FEMALE');
	$bloodtypeSelector = array('A','B','AB','0');
	$religionSelector = array('ISLAM','PROTESTANT','CATHOLIC','HINDUISM','BUDDHISM','CONFUCIANISM','OTHER');
	$martialSelector = array('SINGLE', 'MARRIED', 'DIVORCED');
	$citizenshipSelector = array('WNI','WNA');
	
	return [
		'IdentityNumber' => $faker->unique()->numberBetween(100000000, 999999999),
		'Name' => $faker->name(),
		'POB' => $faker->city,
		'DOB' => $faker->date(),
		'Gender' => $genderSelector[$faker->numberBetween(0, count($genderSelector) - 1)],
		'BloodType' => $bloodtypeSelector[$faker->numberBetween(0, count($bloodtypeSelector) - 1)],
		'Address' => $faker->address,
		'Religion' => $religionSelector[$faker->numberBetween(0, count($religionSelector) - 1)],
		'Martial' => $martialSelector[$faker->numberBetween(0, count($martialSelector) - 1)],
		'Job' => $faker->catchPhrase,
		'Citizenship' => $citizenshipSelector[$faker->numberBetween(0, count($citizenshipSelector) - 1)]
	];
});
