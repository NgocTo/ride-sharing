<?php

namespace App\Http\Controllers;

use App\CurrentRide;
use App\User;
use App\DriverInfo;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index(Request $request) 
    {
        $currentRides = CurrentRide::take(5)->get();
        $data = array();
        $currentRide = new \stdClass();
        foreach ($currentRides as $currentRide) {
            $currentRide->user = User::where('id', $currentRide->driverId)->first();
            $currentRide->driverInfo = DriverInfo::where('userId', $currentRide->driverId)->first();
            array_push($data, $currentRide);
        }
        return json_encode($data);
    }

    public function rideinfo($id, $origin, $destination){
        $currentRide = CurrentRide::find($id);
        $currentRide->riderPos = $origin;
        $currentRide->riderDes = $destination;
        $currentRide->riderId = Auth::id();
        $currentRide->user = User::where('id', $currentRide->driverId)->first();
        $currentRide->driverInfo = DriverInfo::where('userId', $currentRide->driverId)->first();
        return view('rides.rideinfo')->with('ride', $currentRide);
    }

    public function updateCurrentRide($id, Request $request) {
        $currentRide = CurrentRide::findOrFail($id);
        $currentRide->update($request->all());
        $currentRide->user = User::where('id', $currentRide->driverId)->first();
        $currentRide->driverInfo = DriverInfo::where('userId', $currentRide->driverId)->first();
        // redirect
        Session::flash('success', $currentRide->user->firstName . ' ' . $currentRide->user->lastName . ' is on the way! Check out your trip details in your ride history.');
        return redirect('/');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         
        if($request->ajax())
        {
            if (Auth::check()) {
                $currentRide = new CurrentRide;
                $currentRide->driverId = Auth::user()->id;
                $currentRide->startPos = $request->input('origin');
                $currentRide->endPos = $request->input('destination');
                $currentRide->startTime = $request->input('time');
                $currentRide->date = $request->input('date');
                $search_url= 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins='.urlencode($currentRide->startPos).'&destinations='.urlencode($currentRide->endPos).'&key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo';
                $results =  file_get_contents($search_url);
                $results_array = json_decode($results, true);
                
                $currentRide->estimatedPrice = ($results_array['rows'][0]['elements'][0]['distance']['value'] ) * 0.58 * 0.001 + 5;
                $currentRide->completed = 0;
                
                $currentRide->save();
                return redirect('/');
            }
        }
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
