<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Acamposm\Ping\Ping;
use Acamposm\Ping\PingCommandBuilder;
class MonitorController extends Controller
{
    //


    public function monitorAPI(){
        $monitors = \App\Models\Monitor::all();
        $data = array();
        foreach($monitors as $key=>$monitor){
            // $data[$key] = Ping::check($monitor->url);
            $host = $monitor->url; 
            // $host = 'google.com'; 
            $port = 443; 
            $waitTimeoutInSeconds = 1; 
                if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
                // It worked 
                \Log::debug($errCode);
                \Log::debug("worked");

                $data[$monitor->url] = 'OK';
    
                } else {
                // It didn't work 
                    \Log::debug($errCode);
                    \Log::debug("didnt work");

                    $data[$monitor->url] = 'DOWN';

    
                } 
           

        fclose($fp);

        }

        \Log::debug($monitors);

        return response()->json(['status'=>'ok', 'monitors' => $data]);
    }

    public function index(){

//    $host = 'google.com'; 
//    $port = 80; 
//    $waitTimeoutInSeconds = 1; 
//        if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
//        // It worked 
//        \Log::debug($errCode);
//        \Log::debug("worked");

//     //    $data[$monitor->url] = 'OK';

//        } else {
//        // It didn't work 
//            \Log::debug($errCode);
//            \Log::debug("didnt work");

//         //    $data[$monitor->url] = 'DOWN';


//        } 
  
    
//         fclose($fp);

        return view('welcome');
    }
}
