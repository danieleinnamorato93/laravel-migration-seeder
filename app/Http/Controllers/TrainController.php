<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
       // $trains= Train::all();
       $trains = Train::where("data_di_partenza", "=", "2024-10-25")->get();
     
        return view("trains", compact("trains"));
    }
}
