<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentRide extends Model
{
    protected $table ='currentRides';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'driverId', 'riderId', 'startPos', 'endPos', 'startTime', 'date', 'estimatedPrice'
    ];
}
