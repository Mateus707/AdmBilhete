<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(Request $request){
        if (Auth::attempt(['email' =>$request-> email, 'password' =>$request-> password])) {
            dd('voce logou safadda');
        }else{
            dd('coisas incorretas sdadasd');
        }
    }
}
