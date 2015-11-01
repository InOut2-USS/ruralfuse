<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	if (!\Auth::check()) {
    	return view('landing');
	}

	switch (\Auth::user()->type) {
		case 'superuser':
		case 'employer':
			return redirect('/tasks');
			break;
		
		case 'middleman':
			return redirect('/profiles');
			break;
	}

});

// Route::get('register', function () {
// 	$user = new \App\User;
// 	$user->name = 'Umang';
// 	$user->password = \Hash::make('password');
// 	$user->email = 'umanghome@gmail.com';
// 	$user->save();
// 	return redirect('/');
// });

// Route::get('login', function () {
// 	if (\Auth::attempt(['email' => 'umanghome@gmail.com', 'password' => 'password'])) {
// 		return redirect('/');
// 	} else {
// 		return 'failed';
// 	}
// });

Route::get('check', function () {
	if (\Auth::check()) {
		return "true";
	} else {
		return "false";
	}
});

// Route::group(['prefix' => 'login'], function () {
	Route::get('login', function () {
		return view('pages.login');
	});

	Route::get('register', function () {
		return view('pages.register');
	});

	Route::get('login/superuser', 'SuperuserController@showLogin'); // Done
	Route::post('login/superuser', 'SuperuserController@login'); // Done

	Route::get('login/middleman', 'MiddlemanController@showLogin'); // Done
	Route::post('login/middleman', 'MiddlemanController@login'); // Done

	Route::get('login/employer', 'EmployerController@showLogin'); // Done
	Route::post('login/employer', 'EmployerController@login'); // Done

// });

// Route::group(['prefix' => 'register'], function () {

	Route::get('register/superuser', 'SuperuserController@showRegister'); // Not needed
	Route::post('register/superuser', 'SuperuserController@register'); // Done

	Route::get('register/middleman', 'MiddlemanController@showRegister'); // Done
	Route::post('register/middleman', 'MiddlemanController@register'); // Done

	Route::get('register/profile', 'ProfilesController@showRegister'); // Done
	Route::post('register/profile', 'ProfilesController@register'); // Done

	Route::get('register/employer', 'EmployerController@showRegister'); // Done
	Route::post('register/employer', 'EmployerController@register'); // Done

// });

Route::get('profiles', 'ProfilesController@show'); // Almost Done

Route::get('profile/{id}', 'ProfilesController@showIndividual');

Route::get('profile/{id}/edit', 'ProfilesController@showEdit'); // Done
Route::post('profile/{id}/edit', 'ProfilesController@edit'); // Done

Route::get('search', 'SearchController@showForm');
Route::post('search', 'SearchController@show');

// Route::group(['prefix' => 'call'], function () {
Route::post('call/single/{id}', 'CallController@single');
Route::post('call/multiple', 'CallController@multiple');
// });

Route::get('tasks', 'TaskController@dashboard');
Route::get('task/make', 'TaskController@showForm');
Route::post('task/make', 'TaskController@make');
Route::get('task/{id}', 'TaskController@show');

Route::get('logout', function () {
	\Auth::logout();
	return redirect('/');
});

Route::get('seed', function () {
	$skill = new \App\Hardskill;
	$skill->skill = 'Agriculture';
	$skill->save();

	$skill = new \App\Hardskill;
	$skill->skill = 'Embroidery';
	$skill->save();

	$skill = new \App\Hardskill;
	$skill->skill = 'Masonry';
	$skill->save();

	$skill = new \App\Hardskill;
	$skill->skill = 'Carpenting';
	$skill->save();

	$skill = new \App\Hardskill;
	$skill->skill = 'Gardening';
	$skill->save();

	$skill = new \App\Hardskill;
	$skill->skill = 'Cooking';
	$skill->save();

	$skill = new \App\Hardskill;
	$skill->skill = 'Packaging';
	$skill->save();
});