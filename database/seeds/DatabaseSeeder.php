<?php

use Illuminate\Database\Seeder;
use App\Bank;
use App\Person;
use App\ReferralCode;
use App\ReferralTransaction;
use App\ReferrerBankAccount;
use App\ReferrerBankTransaction;
use App\Referrer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$Bank = factory(Bank::class, 100)->create();
		$Person = factory(Person::class, 100)->create();
    }
}
