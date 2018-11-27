<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferrerBankTransaction extends Model {
	protected $table = 'referrer_bank_transaction';
	protected $primaryKey = 'Id';
    protected $fillable = ['Referrer', 'BankAccount', 'Points'];
	public $timestamps = false;
}
