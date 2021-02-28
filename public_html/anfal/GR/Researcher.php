<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    protected $fillable = [

        'name','e_name','email','phone','country','city','academic_name','major','speciality','institution','job_title','birthday','column_13'

    ];
}
