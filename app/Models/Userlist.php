<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'list_name',
        'provider',
        'api_key',
        'api_password',
        'phone_number',
        'url',
    ];
}
