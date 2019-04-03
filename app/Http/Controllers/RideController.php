<?php

namespace App\Http\Controllers;

use App\CurrentRide;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function create()
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function getDirection($origin, $destination)
    {
        $key = 'AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo';
        $data = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?origin='.urlencode($origin).'&destination='.urlencode($destination).'&key='.$key);
        return $data; 
    }
    public function fillDropdown($terms)
    {
        $key = 'AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo';
        $data = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input=' . urlencode($terms) . '&types=geocode&key='.$key);
        // return $data; 
        $arr = array();
        $i=0;
        foreach(json_decode($data)->predictions as $prediction){
            $arr[$i] = array(
                'id' => $i,
                'text' => $prediction->description
            );
            $i++;
        }
        return json_encode($arr);
    }
}
