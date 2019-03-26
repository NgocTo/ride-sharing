<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleInfo extends Model
{
    //
    protected $table ='vehicleInfo';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'carYear', 'make', 'kilometers', 'color', 'licencePlate', 'userId'
    ];
}
