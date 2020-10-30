<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id','first_name','last_name','email','phone','city','dob','zipcode','state','image','address'
    ];

    public function getzipcodeAttribute($value)
    {
        return substr(preg_replace('/\D/', '', $value), 0, 6);
    }

    public function getdobAttribute($value)
    {
        return date('d-F-Y', strtotime($value)); 
    }
}
