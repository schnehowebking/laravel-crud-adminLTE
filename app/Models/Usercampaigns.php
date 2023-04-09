<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercampaigns extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'campaign_name',
        'list',
        'sent',
    ];
}
