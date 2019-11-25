<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuzzleController extends Controller
{
    
    public function index(Request $request)
    {
        // return 'something';
        $client = new \GuzzleHttp\Client([

            'headers' => ['content-type' => 'application/json','Accept' => 'application/json'],
            ]);

            $location = $request->search;

            $url ='http://api.openweathermap.org/data/2.5/weather?q='.$location.'&APPID=9b843e7394f6c5a15a91ca90463d3434';

            $response = $client->request('GET',$url);

            $data = $response->getBody();

            $data = json_decode($data);

            // dd($data);

            return view('forecastview', ['temp' =>$data]);
        
    }

}