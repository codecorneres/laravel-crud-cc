<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    public $table = 'registration_form';
    public $primaryKey = 'id';
    public $fillable = [
        'First Name',
        'Last Name',
        'Email',
        'Password',
        'Address',
        'Country',
        'State'

    ];
}
