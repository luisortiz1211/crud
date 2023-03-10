<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){

        $this->validate($request,[
            'email'=> 'required',
            'password' => 'required']);

         
        return redirect()->route('post.index');
    }

}
