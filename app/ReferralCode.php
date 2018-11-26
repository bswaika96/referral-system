<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralCode extends Model {
	protected $table = 'referral_code';
	protected $primaryKey = 'Id';
    protected $fillable = ['Referrer', 'Code', 'ShortCode'];
	public $timestamps = false;
}
