<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoreplies extends Model
{
    use HasFactory;
    protected $fillable = [
        'keyword',
        'status',
    ];
}
