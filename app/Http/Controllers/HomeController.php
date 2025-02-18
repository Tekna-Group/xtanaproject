<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $amen = [];
        if(auth()->user()->servers)
        {
            $client = new Client();

            $email = env('API_USERNAME');
            $password = env('API_PASSWORD');
            // Send the POST request to the API
            $apiUrl = 'https://api.ionos.com/cloudapi/v6/datacenters/'.auth()->user()->servers->datacenterId.'/servers/'.auth()->user()->servers->serverId;
            $response = $client->get($apiUrl, [
                // 'json' => $data,
                'auth' => [$email, $password]  // Add Basic Auth credentials here
            ]);
    
            // Get the response body
            $amen = json_decode($response->getBody()->getContents());
        }
        // dd($amen);
        return view('home',
    array(
        'amen' => $amen,
    ));
    }
    
}
