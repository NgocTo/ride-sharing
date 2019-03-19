<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverInfo extends Model
{
    //
    protected $table ='driverInfo';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dob', 'licenseNumber', 'expiryDate', 'province', 'userId'
    ];
}
