<?php

namespace App\Http\Controllers;
use App\UserDatacenter;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ServerController extends Controller
{
    //
    public function create()
    {
        $createServer = $this->createServer();
        sleep(30);
        $newServer = $this->newServer($createServer->id);
        sleep(30);
        $createNetwork = $this->createNetwork($createServer->id,$newServer->id);
        $new_DataCenter = new UserDatacenter;
        $new_DataCenter->user_id = auth()->user()->id;
        $new_DataCenter->datacenterId = $createServer->id;
        $new_DataCenter->serverId = $newServer->id;
        $new_DataCenter->save();
        
    }
    public function createServer()
    {
        // Initialize Guzzle client
        $client = new Client();
        // dd();
        // Prepare the JSON payload
        $data = [
            "properties" => [
                "name" => auth()->user()->email."- Xtana",
                "description" => auth()->user()->email."- Xtana",
                "location" => "us/las",
                "secAuthProtection" => true,
                "createDefaultSecurityGroup" => true
            ],
            "entities" => [
                "servers" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ],
                "volumes" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ],
                "loadbalancers" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ],
                "lans" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ],
                "networkloadbalancers" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ],
                "natgateways" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ],
                "securitygroups" => [
                    "type" => "collection",
                    "offset" => 0,
                    "limit" => 1000,
                    "_links" => new \stdClass()  // Use empty object for '_links'
                ]
            ]
        ];
        $email = env('API_USERNAME');
        $password = env('API_PASSWORD');
        // Send the POST request to the API
        $response = $client->post('https://api.ionos.com/cloudapi/v6/datacenters', [
            'json' => $data,
            'auth' => [$email, $password]  // Add Basic Auth credentials here
        ]);

        // Get the response body
        $responseBody = $response->getBody()->getContents();

        // Return the response (for testing purposes)
        return json_decode($responseBody);
    }

    public function newServer($dataCenterId)
    {
        $client = new Client();

        $data = [
            'properties' => [
                'name' => 'Xtana',
                'hostname' => 'Xtana',
                'cores' => 2,
                'ram' => 1024,
                'availabilityZone' => 'AUTO',
            ],
            'entities' => [
                'cdroms' => [
                    'type' => 'collection',
                    'items' => [],
                    'offset' => 0,
                    'limit' => 1000,
                    '_links' => new \stdClass() ,
                ],
                'securitygroups' => [
                    'type' => 'collection',
                    'offset' => 0,
                    'limit' => 1000,
                    '_links' => new \stdClass() ,
                ],
            ]
        ];

        $email = env('API_USERNAME');
        $password = env('API_PASSWORD');
        $apiUrl = 'https://api.ionos.com/cloudapi/v6/datacenters/'.$dataCenterId.'/servers';
        // Send the POST request to the API
        $response = $client->post($apiUrl, [
            'json' => $data,
            'auth' => [$email, $password]  // Add Basic Auth credentials here
        ]);

        // Get the response body
        $responseBody = $response->getBody()->getContents();

        // Return the response (for testing purposes)
        return json_decode($responseBody);

    }
    public function createNetwork($dataCenterId,$serverId)
    {
        $client = new Client();

        $data = [
            'properties' => [
                'name' => 'My resource',
                'dhcp' => true,
                'lan' => 1,
                'firewallActive' => false,
                'firewallType' => 'INGRESS',
            ],
            'entities' => [
                'flowlogs' => [
                    'type' => 'collection',
                    'offset' => 0,
                    'limit' => 1000,
                    '_links' => new \stdClass() ,
                ],
                'firewallrules' => [
                    'type' => 'collection',
                    'offset' => 0,
                    'limit' => 1000,
                    '_links' => new \stdClass() ,
                ],
                'securitygroups' => [
                    'type' => 'collection',
                    'offset' => 0,
                    'limit' => 1000,
                    '_links' => new \stdClass() ,
                ],
            ]
        ];

        $email = env('API_USERNAME');
        $password = env('API_PASSWORD');
        $apiUrl = "https://api.ionos.com/cloudapi/v6/datacenters/".$dataCenterId."/servers/".$serverId."/nics";
        // Send the POST request to the API
        $response = $client->post($apiUrl, [
            'json' => $data,
            'auth' => [$email, $password]  // Add Basic Auth credentials here
        ]);

        // Get the response body
        $responseBody = $response->getBody()->getContents();

        // Return the response (for testing purposes)
        return json_decode($responseBody);
        
    }
}
