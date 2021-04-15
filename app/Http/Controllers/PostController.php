<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\Utility\MyLogger1;
use Carbon\Exceptions\Exception;


class PostController extends Controller
{
    private $logger;
    public function show(Post $post){
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering PostController@show");
        $this->logger->info("Exiting PostController@show, redirecting to blog-post page");
        return view('blog-post', ['post'=> $post]);
        
    }

    public function create(){
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering PostController@create");
        $this->logger->info("Exiting PostController@create, redirecting to profile.posts.create page");
        return view('profile.posts.create');

    }

    public function store(){
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering PostController@store");
        try{
            $inputs = request()->validate([
    
               'title'=> 'required | min:5 | max:200',
               'post_image'=> 'file',
               'body'=>'required'
           ]);
           if(request('post_image')){
               $inputs['post_image'] = request('post_image')->store('images');
           }
            auth()->user()->posts()->create($inputs);
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting PostController@store, redirecting back to the same page");
        return back();

    }
    
    public function comment(Post $post){
        $this->logger = MyLogger1::getLogger();
        $this->logger->info("Entering PostController@comment");
        try{
            $inputs = [
              'message' => request()->get('message')
            ];
            $post->comment()->create($inputs);
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting PostController@comment, redirecting back to the same page");
        return back();
    }



}
