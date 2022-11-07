<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Festival;

class FestivalController extends Controller
{
    //
    public function index(){
        $comics = Comic::all();
        return view('home', compact('comics'));
    }
}
