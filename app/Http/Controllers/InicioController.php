<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(Request $request)
    {
        // return view('StartView');
        $array = ['name' => $request -> query('name','ulises')];
        return view('StartView')->with($array);
    }

}
