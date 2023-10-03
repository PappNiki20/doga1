<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;
    protected  $primaryKey = 'flight_id';
    protected $fillable = [
        'date',
        'airline_id',
        'limit',
    ];

}
