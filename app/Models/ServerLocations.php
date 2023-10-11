<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerLocations extends Model
{
    use HasFactory;

    protected $fillable = [
        'server_provider',
        'server_location_name',
        'server_location_country',
        'server_location_ip'
    ];

}
