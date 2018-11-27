<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referrer extends Model {
	protected $table = 'referrer';
	protected $primaryKey = 'Id';
    protected $fillable = ['Person', 'Points', 'Active'];
	public $timestamps = false;
}
