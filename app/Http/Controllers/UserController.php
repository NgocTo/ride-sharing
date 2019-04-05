<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\DriverInfo;
use App\VehicleInfo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    public function index()
    {
        if (Auth::check()){
            $user = new \stdClass();
            $user->id = Auth::user()->id;
            $user->firstName = Auth::user()->firstName;
            $user->lastName = Auth::user()->lastName;
            $user->email = Auth::user()->email;
            $user->phone = Auth::user()->phone;
            $user->keyword = Auth::user()->keyword;
            $user->ifDriver = Auth::user()->ifDriver;
            return view('user.index')->with('user', $user);
        } else {
            return view('user.index');
        }
    }
    public function fillDropdown($terms)
    {
        $key = 'AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo';
        $data = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input=' . $terms . '&types=geocode&key='.$key);
        return $data; 
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
    public function setDriverMode(Request $request) {
        if (Auth::check() && (Auth::user()->ifDriver === 1)){
            $toggle = $request->input('toggleBtn');
            // $request->session()->put('driverMode', true);
            var_dump($toggle);
        } else {
            return "denied";
        }
    }

    // public function setDriverMode(Request $request) {
    //     if (Auth::check()){
    //         $ifDriver = Auth::user()->ifDriver;
    //         if ($ifDriver === 1) {
    //             $toggle = $request->input('toggleBtn');
    //             $request->session()->put('driverMode', true);
    //             return "in driver mode";
    //         } else {
    //             return "denied";
    //         }
    //     }
    // }

    public function setRiderMode() {
        if (Auth::check())
        {
            $request->session()->forget('driverMode');
            return "in rider mode";
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('user.show', ['user' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
