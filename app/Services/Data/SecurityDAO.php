<?php


namespace app\Services\Data;

use App\Models\Post;
use App\Models\User;
use App\Services\Utility\MyLogger1;
use Carbon\Exceptions\Exception;

class SecurityDAO
{   
    // logger variable stored outside of the function to make it reuseable
    private $logger;
    
    /*
     *  Initializes MyLogger service on SecurityDAO's creation.
     */
    public function __construct(){
        $this->logger = MyLogger1::getLogger();
    }

    /*
     * API Purposes created functions that pulls user data from database
     */
    public function getUsersDAO(){
        $this->logger->info("Entering SecurityDAO@getUserDAO");
        $this->logger->info("Exiting SecurityDAO@getUsersDAO, passing values to Security Service");
        return User::all();
    }

    /*
     * API Purposes created functions that updates user data on database
     */
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

    /*
     * API Purposes created functions that deletes user data from database
     */
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

    /*
     * API Purposes created functions that pulls specified user data by its ID from database
     */
    public function getUserByID($id){
        $this->logger->info("Entering SecurityDAO@getUserByID");
        $this->logger->info("Exiting SecurityDAO@getUserByID, passing values to Security Service");
        return User::all()->findOrFail($id);
    }

    /*
     * API Purposes created functions that pulls posts data from database
     */
    public function getPostsDAO(){
        $this->logger->info("Entering SecurityDAO@getPostsDAO");
        $this->logger->info("Exiting SecurityDAO@getPostsDAO, passing values to Security Service");
        return Post::all();

    }

    /*
     * API Purposes created functions that updates post's data on database
     */
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

    /*
     * API Purposes created functions that delete Post's data from database
     */
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

    /*
     * API Purposes created functions that pulls specified post data by its title from database
     */
    public function searchForPost($title){
        $this->logger->info("Entering SecurityDAO@searchForPost");
        $this->logger->info("Exiting SecurityDAO@searchForPost, passing values to Security Service");
        return Post::where('title', 'like', '%'.$title.'%')->get();
    }

    /*
     * API Purposes created functions that pulls specified user data by its name from database
     */
    public function searchForUser($name){
        $this->logger->info("Entering SecurityDAO@searchForUser");
        $this->logger->info("Exiting SecurityDAO@searchForUser, passing values to Security Service");
        return User::where('username', 'like', '%'.$name.'%')->get();
    }
}
