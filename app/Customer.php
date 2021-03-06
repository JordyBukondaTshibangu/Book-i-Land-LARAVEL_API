<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = [
        'fullName',
        'dateOfBirth',
        'email',
        'password'
    ];
}
