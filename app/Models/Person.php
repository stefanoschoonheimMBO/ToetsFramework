<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';
    /** name, street, home_nr, zipcode, city, phone_nr*/
    protected $fillable = [
        'name',
        'street',
        'home_nr',
        'zipcode',
        'city',
        'phone_nr'
    ];
}
