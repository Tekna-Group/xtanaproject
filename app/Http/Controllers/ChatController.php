<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //

    public function index()
    {
        return view('chat');
    }

    public function submitMessage(Request $request){
      
                // dd($request->group);
                $client = new Client();

                $response = $client->post('https://llm-api.xtana.ai/api/generate', [
                   
                    'json' => [
                        'group' => $request->group,
                        'query' => $request->message,
                    ],
                ]);
                
                // Get the JSON response
                $data = json_decode($response->getBody()->getContents(), true);
                $data = json_decode($response, true);

                // Handle the response as needed
                return response()->json($data);
    }
}
