<?php


namespace App\Services\Business;


use App\Services\Data\SecurityDAO;

class SecurityService
{
    private $dao;

    public function __construct()
    {
        $this->dao = new SecurityDAO();
    }

    public function getUsersDAO(){
        return $this->dao->getUserDAO();
    }

    public function updateUserDAO(){
        return $this->dao->updateUserDAO();
    }

    public function deleteUserDAO(){
        return $this->dao->deleteUserDAO();
    }

    public function getPostsDAO(){
        return $this->dao->getPostsDAO();
    }

    public function updatePostDAO(){
        return $this->dao->updatePostDAO();
    }

    public function deletePostDAO(){
        return $this->dao->deletePostDAO();
    }

    public function searchForPost(){
        return $this->dao->searchForPost();
    }

    public function searchForUser(){
        return $this->dao->searchForUser();
    }

    public function logout(){
        return $this->dao->logout();
}

}
