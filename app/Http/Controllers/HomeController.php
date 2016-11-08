<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = \GoogleMaps::load('placeadd')
        ->setParam([
           'location' => [
           'lat'  => -33.8669710,
           'lng'  => 151.1958750
           ],
           'accuracy'           => 0,
           "name"               =>  "Google Shoes!",
           "address"            => "48 Pirrama Road, Pyrmont, NSW 2009, Australia",
           "types"              => ["shoe_store"],
           "website"            => "http://www.google.com.au/",
           "language"           => "en-AU",
           "phone_number"       =>  "(02) 9374 4000"                       
           ])
        ->get();  
        return view('home')->with('response', $response) ;
    }
}
