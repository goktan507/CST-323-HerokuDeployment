<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\Utility\MyLogger1;
use Carbon\Exceptions\Exception;

class HomeController extends Controller
{
    // logger variable stored outside of the function to make it reuseable 
    private $logger;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // initializing logger variable by getting the logger from MyLogger class
        $this->logger = MyLogger1::getLogger();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        //  Logging info
        $this->logger->info("Entering HomeController@index");
        try{
            $posts = Post::all();   // Getting all posts from database using Laravel built-in functionality.
        } catch (Exception $e){
            $this->logger->error($e);   // Logging the error thrown by exception handler 
        }
        $this->logger->info("Exiting HomeController@index, redirecting home page");
        return view('home',['posts'=> $posts]);
    }

    public function logout(Request $request){
        $this->logger->info("Entering HomeController@logout");
        try{
            $request->session()->flush();   // Clearing the session so that user is no longer logged in
        } catch (Exception $e){
            $this->logger->error($e);   //  Logging the error thrown by exception handler 
        }
        $this->logger->info("Exiting HomeController@logout redirecting login page");
        return redirect('login');
    }

}
