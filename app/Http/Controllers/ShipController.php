<?php

namespace App\Http\Controllers;
use App\Models\Ships;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function index(){
        $ships = Ships::get();

       return inertia('Ships',[
        'ships' => $ships
       ]);
    }
}
