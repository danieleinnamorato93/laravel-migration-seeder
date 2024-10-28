<?php

namespace App\Http\Controllers;


use App\Models\Ticket;
use Illuminate\Http\Request;


class TicketController extends Controller
{
    public function index(){
        $tickets = Ticket::all();
        return view('tickets.index' , compact("tickets"));
        }
}
