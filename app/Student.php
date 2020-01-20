<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';
    protected $fillable = ['firstname','lastname','gender','phone','country','city','address'];
    
}
