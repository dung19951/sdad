<?php


namespace App\Controller;


use App\Model\UserModel;

class UserController
{
    private $userModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function logInUser()
    {
        $user = $this->userModel->logIn($_REQUEST);
        if ($user) {
            session_start();
            $_SESSION['userLogin'] = $user;
            header('location: ../../index.php');
        }
        return false;
    }

    public function logOut()
    {
        if (isset($_SESSION['userLogin'])) {
            session_destroy();
            header('location:index.php');
        }
    }

    public function singupp()
    {
            $user=$this->userModel->singup($_REQUEST);
            header('location:login.php');
        }

}
