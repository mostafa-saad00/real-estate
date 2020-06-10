<?php

namespace App\Http\Controllers;

use App\HomeInfo;
use App\Realestate;
use Illuminate\Http\Request;
use Nexmo\Client;
use Nexmo\Client\Credentials\Basic;


class HomeController extends Controller
{
    public function index()
    {
        
    	// $basic  = new Basic('339344ba', 'oE84QSHU6Xdj9xQS');
    	// $client = new Client($basic);

    	// try {
    	//     $message = $client->message()->send([
    	//         'to' => '201158490400',
    	//         'from' => 'Acme Inc',
    	//         'text' => 'A text message sent using the Nexmo SMS API'
    	//     ]);
    	//     $response = $message->getResponseData();

    	//     if($response['messages'][0]['status'] == 0) {
    	//         echo "The message was sent successfully\n";
    	//     } else {
    	//         echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    	//     }
    	// } catch (Exception $e) {
    	//     echo "The message was not sent. Error: " . $e->getMessage() . "\n";
    	// }
    	

    	$realestates = Realestate::paginate(7);
    	$home_info = HomeInfo::findOrFail(1);
        return view('home', compact('realestates', 'home_info'));
    }
}
