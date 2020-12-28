<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable  = [

        'profile_name',
        'profile_work',
        'profile_education',
        'profile_bio',
        'profile_country',
        'profile_location',
        'profile_industry'

    ];
        
}
