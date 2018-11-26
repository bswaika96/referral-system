<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferrerBankAccount extends Model {
	protected $table = 'referrer_bank_account';
	protected $primaryKey = 'Id';
    protected $fillable = ['Referrer', 'BankCode', 'BakAccountNumber'];
}
