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
      
         
                $client = new Client();

                $response = $client->post('https://api.anthropic.com/v1/messages', [
                    'headers' => [
                        'x-api-key' => env('CHAT_API'),
                        'anthropic-version' => '2023-06-01',
                        'content-type' => 'application/json',
                    ],
                    'json' => [
                        'model' => 'claude-3-5-sonnet-20241022',
                        'max_tokens' => 1024,
                        'messages' => [
                            ['role' => 'user', 'content' => $request->message],
                        ],
                    ],
                ]);

                // Get the JSON response
                $data = json_decode($response->getBody()->getContents(), true);

                // Handle the response as needed
                return response()->json($data);
    }
}
