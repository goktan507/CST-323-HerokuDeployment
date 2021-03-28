<?php

namespace App\Http\Controllers;

use App\Services\Utility\MyLogger1;

class AdminsController extends Controller
{
    private $logger;
    public function index(){
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering AdminsController@index");
        $this->logger->info("Exiting AdminsController@index, redirecting profile.index");
        return view('profile.index');

    }

}
