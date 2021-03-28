<?php

namespace app\Http\Controllers;

use App\Models\Post;
use app\Services\Utility\MyLogger1;


class PostController extends Controller
{
    private $logger;
    public function __construct(){
        $this->logger = MyLogger1::getLogger();
    }
    public function show(Post $post){
        $this->logger->info("Entering PostController@show");
        $this->logger->info("Exiting PostController@show, redirecting to blog-post page");
        return view('blog-post', ['post'=> $post]);
        
    }

    public function create(){
        $this->logger->info("Entering PostController@create");
        $this->logger->info("Exiting PostController@create, redirecting to profile.posts.create page");
        return view('profile.posts.create');

    }

    public function store(){
        $this->logger->info("Entering PostController@store");
       $inputs = request()->validate([

           'title'=> 'required | min:5 | max:200',
           'post_image'=> 'file',
           'body'=>'required'
       ]);

       if(request('post_image')){
           $inputs['post_image'] = request('post_image')->store('images');
       }

        auth()->user()->posts()->create($inputs);
        $this->logger->info("Exiting PostController@store, redirecting back to the same page");
        return back();

    }



}
