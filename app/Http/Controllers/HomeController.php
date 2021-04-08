<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\Utility\MyLogger1;
use Carbon\Exceptions\Exception;

class HomeController extends Controller
{
    private $logger;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering HomeController@index");
        try{
            $posts = Post::all();
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting HomeController@index, redirecting home page");
        return view('home',['posts'=> $posts]);
    }

    public function logout(Request $request){
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering HomeController@logout");
        try{
            $request->session()->flush();
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting HomeController@logout redirecting login page");
        return redirect('login');
    }

}
