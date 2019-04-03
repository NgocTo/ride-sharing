<?php

namespace App\Http\Controllers;
use App\User;
use Session;
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
        $users = User::all();
        return view('users.index')->with('users', $users);
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
    public function checkDriver(Request $request) {
        // $ifDriver = Session::get('ifDriver');
        if($request->session()->has('ifDriver')) {
            echo $request->session()->get('ifDriver');
        }
        else {
            echo 'No data in the session';
        }
    }
    public function storeDriver() {
        if (Auth::check())
        {
            $userId = Auth::id();
            $ifDriver = Auth::user()->ifDriver;
            echo $ifDriver;
        }
        // $request->session()->put('ifDriver', true);
        // echo "Data has been added to session";
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
        return view('users.show', ['user' => User::findOrFail($id)]);
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
