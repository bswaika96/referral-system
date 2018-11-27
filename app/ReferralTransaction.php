<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralTransaction extends Model {
	protected $table = 'referral_transaction';
	protected $primaryKey = 'Id';
    protected $fillable = ['Referee', 'Code', 'Points'];
	public $timestamps = false;
}
