<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $table ='rides';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'driverId', 'riderId', 'startPos', 'endPos', 'startTime', 'endTime', 'date', 'price', 'driverRating'
    ];
}
