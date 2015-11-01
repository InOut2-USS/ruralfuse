<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MiddlemanController extends Controller
{
    public function showLogin () {
        return view('login')->with('next', 'middleman');
    }

    public function showRegister () {
        return view ('register.middleman');
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

        // return $request;

        if (!$request->has('name') || 
            !$request->has('email') || 
            !$request->has('password') || 
            !$request->has('phone') || 
            !$request->has('age') || 
            !$request->has('gender') ||
            !$request->hasFile('resume')) {

            return view('error')->with('error', 'Please provide all the fields.');
        }

        $input = $request->all();

        $user = new \App\User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->password = \Hash::make($input['password']);
        $user->type = 'middleman';
        $user->save();

        $miduser = new \App\Middleman;
        $miduser->user_id = $user->id;
        $miduser->age = $input['age'];
        $miduser->gender = $input['gender'];

        if (isset($input['preferred_village'])) {
            $miduser->village = $input['preferred_village'];
        }

        $filename = sha1(time()) . '.pdf';

        $path = getcwd() . '/resumes';

        $request->file('resume')->move($path, $filename);

        $miduser->resume = $filename;

        $miduser->save();

        // return response()->json(['success' => $user->id]);
        return redirect('/');

    }
}
