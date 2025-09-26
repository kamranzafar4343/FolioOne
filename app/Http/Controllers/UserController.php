<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(Request $request){

        return view('welcome');
    }

        function about(Request $request){

        return view('about');
    }
    
    function resume(Request $request){

        return view('resume');
    }
    
    function service(Request $request){

        return view('service');
    }

    function portfolio(Request $request){

        return view('portfolio');
    }
   
   
}
