<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();


        return view('home',['posts'=> $posts]);
    }

    public function logout(Request $request){
        //$request->session()->flush();

       
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
        return redirect('login');
    }

}
