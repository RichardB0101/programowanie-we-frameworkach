<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('welcome', ['profileItems' => Profile::all()]);
    }




}
