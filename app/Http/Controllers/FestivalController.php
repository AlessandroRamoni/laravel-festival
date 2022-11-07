<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Festival;

class FestivalController extends Controller
{
    //
    public function index(){
        $festival = Festival::all();
        return view('home', compact('festival'));
    }
}
