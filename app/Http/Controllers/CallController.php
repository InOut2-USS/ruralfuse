<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CallController extends Controller
{
    public function single (Request $request, $id) {
        if (!\Auth::check()) {
            return response()->json(['error' => 'You cannot perform this action.'], 403);
        }
        if (!(\Auth::user()->type == 'superuser' || \Auth::user()->type == 'middleman')) {
            return response()->json(['error' => 'You cannot perform this action.'], 403);
        }

        $profile = \App\Profile::where('id', '=', $id)->get()->first();
        if (count($profile) != 1) {
            return response()->json(['error' => 'You cannot perform this action.'], 404);   
        }
        if (!\Auth::user()->type == 'superuser') {
            if ($profile->middleman_id != \Auth::user()->id) {
                return response()->json(['error' => 'You cannot perform this action.'], 403);       
            }
        }

        $post_data = [
            'From' => '0' . $profile->phone,
            'CallerId' => '07930447021',
            'Url' => 'http://my.exotel.in/exoml/start/56809',
            'CallType' => 'trans',
        ];
         
        $exotel_sid = 'ruralfuse'; // Your Exotel SID - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
        $exotel_token = '072f910fe7c604a3aba59c768a78e1d498ba17fe'; // Your exotel token - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
         
        $url = "https://" . $exotel_sid . ":" . $exotel_token . "@twilix.exotel.in/v1/Accounts/" . $exotel_sid . "/Calls/connect";
         
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
         
        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
         
        curl_close($ch);
         
        return $http_result;
    }

    public function multiple (Request $request) {
        if(!$request->has('toCall')) {
            return response()->json(['error' => 'nope'], 400);
        }
        $input = $request->all();
        $toCall = json_decode($input['toCall']);
        foreach ($toCall as $id) {
            
            $profile = \App\Profile::where('id', '=', $id)->get()->first();

            $post_data = [
                'From' => '0' . $profile->phone,
                'CallerId' => '07930447021',
                'Url' => 'http://my.exotel.in/exoml/start/56809',
                'CallType' => 'trans',
            ];
             
            $exotel_sid = 'ruralfuse'; // Your Exotel SID - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
            $exotel_token = '072f910fe7c604a3aba59c768a78e1d498ba17fe'; // Your exotel token - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
             
            $url = "https://" . $exotel_sid . ":" . $exotel_token . "@twilix.exotel.in/v1/Accounts/" . $exotel_sid . "/Calls/connect";
             
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FAILONERROR, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
             
            $http_result = curl_exec($ch);
            $error = curl_error($ch);
            $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
             
            curl_close($ch);

        }
    }
}
