<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    public function showRegister () {
        return view('register.employer');
    }

    public function showLogin () {
        return view('login')->with('next', 'employer');
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

    public function register (Request $request) {
        if (!$request->has('name') ||
            !$request->has('password') ||
            !$request->has('email') ||
            !$request->has('phone') ||
            !$request->has('company_name') ||
            !$request->has('location')
        ) {
            return view('error')->with('error', 'Please provide all the fields.');
        }
        $input = $request->all();

        $user = new \App\User;
        $user->name = $input['name'];
        $user->password = \Hash::make($input['password']);
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->type = 'employer';
        $user->save();

        $emp = new \App\Employer;
        $emp->user_id = $user->id;
        $emp->company_name = $input['company_name'];
        $emp->location = $input['location'];

        $emp->save();

        // return response()->json(['success' => $emp->id]);
        return redirect('/');
    }
}
