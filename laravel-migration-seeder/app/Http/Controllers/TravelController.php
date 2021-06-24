<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index(){

        $travels = Travel::all();
        //dump($travels);

        return view('travel',['travels' => $travels]);
    }
}
