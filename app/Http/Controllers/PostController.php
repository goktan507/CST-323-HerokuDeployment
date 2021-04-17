<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\Utility\MyLogger1;
use Carbon\Exceptions\Exception;


class PostController extends Controller
{
    // logger variable stored outside of the function to make it reuseable 
    private $logger;
    
    public function __construct(){
        // initializing logger variable by getting the logger from MyLogger class
        $this->logger = MyLogger1::getLogger();
    }
    
    /*
     *  Opens the blog post
     */
    public function show(Post $post){
        $this->logger->info("Entering PostController@show");
        $this->logger->info("Exiting PostController@show, redirecting to blog-post page");
        return view('blog-post', ['post'=> $post]);
        
    }

    /*
     * Opens the blog post create page in profile 
     */
    public function create(){
        $this->logger->info("Entering PostController@create");
        $this->logger->info("Exiting PostController@create, redirecting to profile.posts.create page");
        return view('profile.posts.create');

    }

    /*
     * Submission of the post create, includes input validation and if valid, creates the post with a relationship to user
     */
    public function store(){
        $this->logger->info("Entering PostController@store");
        try{
            $inputs = request()->validate([
    
               'title'=> 'required | min:5 | max:200',
               'post_image'=> 'file',
               'body'=>'required'
           ]);
            // if the posted image can be requested, then creates the posted image and stores on database **Malfunctioning**
           if(request('post_image')){
               $inputs['post_image'] = request('post_image')->store('images');
           }
            auth()->user()->posts()->create($inputs);   // creates the post using validation, relationship to the user.
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting PostController@store, redirecting back to the same page");
        return back();

    }



}
