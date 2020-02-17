<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Api extends Controller
{
    public function getCount(){
        $user= Auth::user();
        $count = $user -> count;
        return response() -> json(compact('count')); 
    }
}
