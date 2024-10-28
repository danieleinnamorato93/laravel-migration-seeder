<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function index(){
    $passengers= Passenger::all();
    return view('passengers.index' , compact("passengers"));
    }
}
