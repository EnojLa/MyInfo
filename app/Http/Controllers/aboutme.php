<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutme extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('aboutme');
    }

    public function name()
    {
        return view('name');
    }

    public function hobby()
    {
        return view('hobby');
    }
   
}
