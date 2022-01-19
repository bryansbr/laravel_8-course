<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    public $fillable = [
        'first_name',
        'last_name',
        'age',
        'gender',
        'country',
        'phone_number',
        'email'
    ];
}
