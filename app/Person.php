<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {
	protected $table = 'person';
	protected $primaryKey = 'Id';
    protected $fillable = ['IdentityNumber', 'Name', 'POB', 'DOB', 'Gender', 'BloodType', 'Address', 'Religion', 'Martial', 'Job', 'Citizenship'];
}
