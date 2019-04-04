<?php

namespace App\Http\Controllers;

use App\CurrentRide;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index() 
    {
        if (Auth::check())
        {
            $userId = Auth::id();
            $data = DB::table('currentRides')->where('userId', '=', $userId)->get();
            // var_dump($data);
            return view('rides.index')->with('currentRides', $data);
        }
        // return currentRide row 
    }
    public function show($id)
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
        $origin = $request->input('origin');
        return json_encode($origin);
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
