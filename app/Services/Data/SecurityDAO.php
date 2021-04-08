<?php


namespace app\Services\Data;

use App\Models\Post;
use App\Models\User;
use App\Services\Utility\MyLogger1;
use Carbon\Exceptions\Exception;

class SecurityDAO
{   
    private $logger;
    public function __construct(){
        $this->logger = MyLogger1::getLogger();
    }

    public function getUsersDAO(){
        $this->logger->info("Entering SecurityDAO@getUserDAO");
        $this->logger->info("Exiting SecurityDAO@getUsersDAO, passing values to Security Service");
        return User::all();
    }

    public function updateUserDAO($user){
        $this->logger->info("Entering SecurityDAO@updateUserDAO");
        try {
            $user = $this->getUsersDAO();
            $user->id = $user['user_id'];
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting SecurityDAO@UpdateUserDAO, passing values to Security Service");
        return $user->save();

    }

    public function deleteUserDAO($id){
        $this->logger->info("Entering SecurityDAO@deleteUserDAO");
        try {
            $user = $this->getUserByID($id);
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting SecurityDAO@deleteUserDAO, passing values to Security Service");
        return $user->forceDelete();
    }

    public function getUserByID($id){
        $this->logger->info("Entering SecurityDAO@getUserByID");
        $this->logger->info("Exiting SecurityDAO@getUserByID, passing values to Security Service");
        return User::all()->findOrFail($id);
    }

    public function getPostsDAO(){
        $this->logger->info("Entering SecurityDAO@getPostsDAO");
        $this->logger->info("Exiting SecurityDAO@getPostsDAO, passing values to Security Service");
        return Post::all();

    }

    public function updatePostDAO($post){
        $this->logger->info("Entering SecurityDAO@updatePostDAO");
        
        try {
            $post = $this->getPostsDAO();
            $post->title = $post['title'];
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting SecurityDAO@updatePostDAO, passing values to Security Service");
        return $post->save();

    }

    public function deletePostDAO($data){
        $this->logger->info("Entering SecurityDAO@deletePostDAO");
        
        try {
            $post = $this->getPostsDAO($data['id']);
        } catch (Exception $e){
            $this->logger->error($e);
        }
        $this->logger->info("Exiting SecurityDAO@deletePostDAO, passing values to Security Service");
        return $post->Delete();
    }

    public function searchForPost($title){
        $this->logger->info("Entering SecurityDAO@searchForPost");
        $this->logger->info("Exiting SecurityDAO@searchForPost, passing values to Security Service");
        return Post::where('title', 'like', '%'.$title.'%')->get();
    }

    public function searchForUser($name){
        $this->logger->info("Entering SecurityDAO@searchForUser");
        $this->logger->info("Exiting SecurityDAO@searchForUser, passing values to Security Service");
        return User::where('username', 'like', '%'.$name.'%')->get();
    }
}
