<?php


namespace App\Services\Business;


use App\Services\Data\SecurityDAO;
use App\Services\Utility\MyLogger1;

class SecurityService
{
    
    // dao and logger variable stored outside of the function to make it reuseable
    private $dao, $logger;

    /*
     *  Initializes SecurityDAO and MyLogger service on SecurityService's creation. 
     */
    public function __construct()
    {
        $this->dao = new SecurityDAO();
        $this->logger = MyLogger1::getLogger();
    }
    
    /*
     * API Purposes created functions that request user data from SecurityDAO
     */
    public function getUsersDAO(){
        $this->logger->info("Entering SecurityService@getUserDAO");
        $this->logger->info("Exiting SecurityService@getUserDAO, passing values to Controller");
        return $this->dao->getUserDAO();
    }

    /*
     * API Purposes created functions that posts user data to SecurityDAO
     */
    public function updateUserDAO(){
        $this->logger->info("Entering SecurityService@updateUserDAO");
        $this->logger->info("Exiting SecurityService@updateUserDAO, passing values to Controller");
        return $this->dao->updateUserDAO();
    }

    /*
     * API Purposes created functions that posts user data to SecurityDAO
     */
    public function deleteUserDAO(){
        $this->logger->info("Entering SecurityService@deleteUserDAO");
        $this->logger->info("Exiting SecurityService@deleteUserDAO, passing values to Controller");
        return $this->dao->deleteUserDAO();
    }

    /*
     * API Purposes created functions that request Post data from SecurityDAO
     */
    public function getPostsDAO(){
        $this->logger->info("Entering SecurityService@getPostsDAO");
        $this->logger->info("Exiting SecurityService@getPostsDAO, passing values to Controller");
        return $this->dao->getPostsDAO();
    }

    /*
     * API Purposes created functions that posts Post data from SecurityDAO
     */
    public function updatePostDAO(){
        $this->logger->info("Entering SecurityService@updatePostDAO");
        $this->logger->info("Exiting SecurityService@updatePostDAO, passing values to Controller");
        return $this->dao->updatePostDAO();
    }

    /*
     * API Purposes created functions that posts Post data from SecurityDAO
     */
    public function deletePostDAO(){
        $this->logger->info("Entering SecurityService@deletePostDAO");
        $this->logger->info("Exiting SecurityService@deletePostDAO, passing values to Controller");
        return $this->dao->deletePostDAO();
    }

    /*
     * API Purposes created functions that request specified Post data from SecurityDAO
     */
    public function searchForPost(){
        $this->logger->info("Entering SecurityService@searchForPost");
        $this->logger->info("Exiting SecurityService@searchForPost, passing values to Controller");
        return $this->dao->searchForPost();
    }

    /*
     * API Purposes created functions that request specified User data from SecurityDAO
     */
    public function searchForUser(){
        $this->logger->info("Entering SecurityService@searchForUser");
        $this->logger->info("Exiting SecurityService@searchForUser, passing values to Controller");
        return $this->dao->searchForUser();
    }

}
