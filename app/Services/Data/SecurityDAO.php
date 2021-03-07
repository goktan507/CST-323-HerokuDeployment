<?php


namespace App\Services\Data;

use App\Models\Post;
use App\User;
use http\Env\Request;

class SecurityDAO
{
    public function __construct(){

    }

    public function getUsersDAO(){

        return User::all();

    }

    public function updateUserDAO($user){
        $user = $this->getUsersDAO();

        $user->id = $user['user_id'];

        return $user->save();

    }

    public function deleteUserDAO($id){
        $user = $this->getUserByID($id);
        return $user->forceDelete();
    }

    public function getUserByID($id){
        return User::all()->findOrFail($id);
    }

    public function getPostsDAO(){

        return Post::all();

    }

    public function updatePostDAO($post){
        $post = $this->getPostsDAO();

        $post->title = $post['title'];

        return $post->save();

    }

    public function deletePostDAO($data){
        $post = $this->getPostsDAO($data['id']);
        return $post->Delete();
    }

    public function searchForPost($title){
        return Post::where('title', 'like', '%'.$title.'%')->get();
    }

    public function searchForUser($name){
        return User::where('username', 'like', '%'.$name.'%')->get();
    }



}
