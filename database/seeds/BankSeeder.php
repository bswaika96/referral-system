<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::truncate();
		
		$faker = \Faker\Factory::create();
		$populator = new Faker\ORM\Propel\Populator($faker);
    }
}
