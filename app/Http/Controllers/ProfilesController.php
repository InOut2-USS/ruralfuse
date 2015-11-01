<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function showRegister () {
        $skills = \App\Hardskill::all();

        return view('register.profile')->with('skills', $skills);
    }

    public function register (Request $request) {
        if (!$request->has('name') || 
            !$request->has('phone') || 
            !$request->has('age') || 
            !$request->has('gender') || 
            !$request->has('payee_name') || 
            !$request->has('available_from') || 
            !$request->has('available_to') || 
            !$request->has('differently_abled') || 
            !$request->has('willingToGoOut')
            ) {

            return view('error')->with('error', 'Please provide all the fields.');
        } 

        $user = new \App\Profile;

        $input = $request->all();

        $availableFrom = explode('-', $input['available_from']);
        $availableTo = explode('-', $input['available_to']);

        $availableFrom = $availableFrom[2] . '-' . $availableFrom[1] . '-' . $availableFrom[0];
        $availableTo = $availableTo[2] . '-' . $availableTo[1] . '-' . $availableTo[0];

        $user->middleman_id = \Auth::id();
        $user->name = $input['name'];
        $user->phone = $input['phone'];
        $user->age = $input['age'];
        $user->gender = $input['gender'];
        $user->payee_name = $input['payee_name'];

        $user->available_from = $input['available_from'];
        $user->available_to = $input['available_to'];
        // $user->differently_abled = $input['differently_abled'];
        // $user->willingToGoOut = $input['willingToGoOut'];
        if ($input['differently_abled'] == 'true') {
            $user->differently_abled = true;
        } else {
            $user->differently_abled = false;
        }

        if ($input['willingToGoOut'] == 'true') {
            $user->willingToGoOut = true;
        } else {
            $user->willingToGoOut = false;
        }

        if (isset($input['email'])) {
            $user->email = $input['email'];
        }

        $user->save();

        if (isset($input['skill-agriculture'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'agriculture')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();
        }
        if (isset($input['skill-embroidery'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'embroidery')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();   
        }
        if (isset($input['skill-masonry'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'masonry')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();
        }
        if (isset($input['skill-carpentry'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'carpentry')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();
        }
        if (isset($input['skill-gardening'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'gardening')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();
        }
        if (isset($input['skill-cooking'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'cooking')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();
        }
        if (isset($input['skill-packaging'])) {
            $skill = new \App\Skill;
            $sk = \App\Hardskill::where('skill', '=', 'packaging')->get()->first();
            $skill->skill_id = $sk->id;
            $skill->profile_id = $user->id;
            $skill->save();
        }

        // return response()->json(['success' => $user->id]);
        return redirect('/profiles');
    }

    public function showEdit ($id) {
        $profile = \App\Profile::where('id', '=', $id)->get()->first();
        return view('profile.edit')->with('pro', $profile);
    }

    public function edit (Request $request, $id) {
        $user = \App\Profile::where('id', '=', $id)->get()->first();
        $input = $request->all();

        // $availableFrom = explode('-', $input['available_from']);
        // $availableTo = explode('-', $input['available_to']);

        // $availableFrom = $availableFrom[2] . '-' . $availableFrom[1] . '-' . $availableFrom[0];
        // $availableTo = $availableTo[2] . '-' . $availableTo[1] . '-' . $availableTo[0];

        $user->name = $input['name'];
        $user->phone = $input['phone'];
        $user->payee_name = $input['payee_name'];
        $user->available_from = $input['available_from'];
        $user->available_to = $input['available_to'];
        if ($input['differently_abled'] == 'true') {
            $user->differently_abled = true;
        } else {
            $user->differently_abled = false;
        }

        if ($input['willingToGoOut'] == 'true') {
            $user->willingToGoOut = true;
        } else {
            $user->willingToGoOut = false;
        }

        if ($input['active'] == 'true') {
            $user->active = true;
        } else {
            $user->active = false;
        }

        if (isset($input['email'])) {
            $user->email = $input['email'];
        }

        $user->save();

        return redirect('profile/' . $user->id . '/edit');
    }

    public function test (Request $request) {
        $input = $request->all();
        echo "<pre>";
        print_r($input);
        exit;
    }

    public function show () {
        $profiles = \App\Profile::where('middleman_id', '=', \Auth::id())->get();

        return view('profile.index')->with('profiles', $profiles);
    }

    public function showIndividual ($id) {
        $profile = \App\Profile::where('id', '=', $id)->get()->first();
        if (count($profile) != 1) {
            return view('error.404');
        }
        $availableFrom = $profile->available_from;
        $availableTo = $profile->available_to;
        $availableFrom = explode('-', $availableFrom);
        $availableTo = explode('-', $availableTo);
        $availableFrom = $availableFrom[2] . '-' . $availableFrom[1] . '-' . $availableFrom[0];
        $availableTo = $availableTo[2] . '-' . $availableTo[1] . '-' . $availableTo[0];
        $profile->available_from = $availableFrom;
        $profile->available_to = $availableTo;

        $skills = \App\Skill::where('profile_id', '=', $profile->id)->get();
        // return $skills;
        $arr = [];

        foreach ($skills as $skill) {
            $hard = \App\Hardskill::where('id', '=', $skill->skill_id)->get()->first();
            array_push($arr, $hard);
        }

        $skills = $arr;
        // return $arr;
        $profile->skills = $skills;

        return view('profile.view')->with('pro', $profile);

    }
}
