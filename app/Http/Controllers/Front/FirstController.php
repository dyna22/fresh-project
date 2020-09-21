<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function getIndex(){
    // return view('welcome');
    
    $obj = new \stdClass();
    $obj -> fname = 'Dyna El-fayed';
    $obj -> age = 21;
    $obj -> gender = 'female';
    return view('welcome', compact('obj'));
    }
}
