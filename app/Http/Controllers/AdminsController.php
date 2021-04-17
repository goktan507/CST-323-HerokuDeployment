<?php

namespace App\Http\Controllers;

use App\Services\Utility\MyLogger1;

class AdminsController extends Controller
{
    // logger variable stored outside of the function to make it reuseable 
    private $logger;
    public function index(){
        // initializing the logger variable by getting the logger from MyLogger class
        $this->logger = MyLogger1::getLogger();
        
        // Logging info
        $this->logger->info("Entering AdminsController@index");
        $this->logger->info("Exiting AdminsController@index, redirecting profile.index");
        return view('profile.index');
    }

}
