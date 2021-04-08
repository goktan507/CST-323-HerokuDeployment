<?php


namespace App\Services\Business;


use App\Services\Data\SecurityDAO;
use App\Services\Utility\MyLogger1;

class SecurityService
{
    private $dao, $logger;

    public function __construct()
    {
        $this->dao = new SecurityDAO();
        $this->logger = MyLogger1::getLogger();
    }

    public function getUsersDAO(){
        $this->logger->info("Entering SecurityService@getUserDAO");
        $this->logger->info("Exiting SecurityService@getUserDAO, passing values to Controller");
        return $this->dao->getUserDAO();
    }

    public function updateUserDAO(){
        $this->logger->info("Entering SecurityService@updateUserDAO");
        $this->logger->info("Exiting SecurityService@updateUserDAO, passing values to Controller");
        return $this->dao->updateUserDAO();
    }

    public function deleteUserDAO(){
        $this->logger->info("Entering SecurityService@deleteUserDAO");
        $this->logger->info("Exiting SecurityService@deleteUserDAO, passing values to Controller");
        return $this->dao->deleteUserDAO();
    }

    public function getPostsDAO(){
        $this->logger->info("Entering SecurityService@getPostsDAO");
        $this->logger->info("Exiting SecurityService@getPostsDAO, passing values to Controller");
        return $this->dao->getPostsDAO();
    }

    public function updatePostDAO(){
        $this->logger->info("Entering SecurityService@updatePostDAO");
        $this->logger->info("Exiting SecurityService@updatePostDAO, passing values to Controller");
        return $this->dao->updatePostDAO();
    }

    public function deletePostDAO(){
        $this->logger->info("Entering SecurityService@deletePostDAO");
        $this->logger->info("Exiting SecurityService@deletePostDAO, passing values to Controller");
        return $this->dao->deletePostDAO();
    }

    public function searchForPost(){
        $this->logger->info("Entering SecurityService@searchForPost");
        $this->logger->info("Exiting SecurityService@searchForPost, passing values to Controller");
        return $this->dao->searchForPost();
    }

    public function searchForUser(){
        $this->logger->info("Entering SecurityService@searchForUser");
        $this->logger->info("Exiting SecurityService@searchForUser, passing values to Controller");
        return $this->dao->searchForUser();
    }

    public function logout(){
        $this->logger->info("Entering SecurityService@logout");
        $this->logger->info("Exiting SecurityService@logout, passing values to Controller");
        return $this->dao->logout();
       
}

}
