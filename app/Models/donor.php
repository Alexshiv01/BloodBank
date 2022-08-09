<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'blood_group',
        'gender',
        'dob',

        'email',
        'contact_no',
        'city',
        'password'
    ];
}
