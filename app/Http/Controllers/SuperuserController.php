<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuperuserController extends Controller
{
    public function showLogin () {
        return view('login')->with('next', 'superuser');
    }

    public function login (Request $request) {
        if (!$request->has('email') || !$request->has('password')) {
            return view('error')->with('error', 'Please provide all the fields.');
        }

        $input = $request->all();
        
        $user = \App\User::where('email', '=', $input['email'])->get()->first();
        
        if (count($user) != 1) {
            return view('error')->with('error', 'Couldn\'t find the user.');
        }

        if (!\Hash::check($input['password'], $user->password)) {
            return view('error')->with('error', 'Wrong password.');
        }

        \Auth::login($user);

        // return response()->json(['id' => \Auth::id()]);
        return redirect('/');

    }

    public function showRegister () {
        return view('register.superuser');
    }

    public function register (Request $request) {
        if (!$request->has('email') || !$request->has('password') || !$request->has('name')
         || !$request->has('phone')
         ) {
            return view('error')->with('error', 'Please provide all the fields.');
        }
        $input = $request->all();
        $user = new \App\User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = \Hash::make($input['password']);
        $user->phone = $input['phone'];
        $user->type = 'superuser';
        $user->save();

        // return response()->json(['success' => $user->id]);
        return redirect('/');
    }
}
