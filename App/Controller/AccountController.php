<?php

namespace ForTech\App\Controller;

use ForTech\App\Core\Router;
use ForTech\App\Core\View;
use ForTech\App\Model\AccountModel;
use ForTech\App\Model\QuestionModel;


class AccountController
{
    public static $account;
    public static $question;

    public function __construct()
    {
        self::$account = new AccountModel;
        self::$question = new QuestionModel;
    }

    public function index()
    {
        $data['user'] = self::$account->getByUsername($_SESSION['auth']->username);
        $data['question'] = self::$question->getAllQuestionByIdUser($_SESSION['auth']->id);
        View::render('Account/index', $data);
    }

    public function registerPage()
    {
        View::renderLogin('Auth/Register');
    }

    public function register()
    {
        $data = [
            'fullname' => $_POST['fullname'],
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        if (self::$account->register($data)) {
            Router::redirect('/login');
        } else {
            Router::redirect('/register');
        }
    }

    public function loginPage()
    {
        View::renderLogin('Auth/Login');
    }

    public static function login()
    {
        $user = self::$account->getByUsername($_POST['username']);
        if ($user && password_verify($_POST['password'], $user->password)) {
            $_SESSION['auth'] = $user;
            Router::redirect('');
            return;
        } else {
            Router::redirect('login');
        }

    }

    public function setData()
    {
        if(!empty($_FILES['image'])){
            $filename = md5($_FILES['image']['name']);
            $tmpFilename = $_FILES['image']['tmp_name'];
            $direktori = '../Storage/Profile/';
            if(!move_uploaded_file($tmpFilename, $direktori . $filename)){
                $filename = null;
            };
        } 

        $data = [
            'fullname'=> $_POST['fullname'],
            'username'=> $_POST['username'],
            'about' => $_POST['about'],
            'avatar' => $filename,
            'address' => $_POST['address'],
            'job' => $_POST['job'],
            'organization' => $_POST['organization'],
            'id' => $_SESSION['auth']->id
        ];

        if(self::$account->setUserData($data)){
            $_SESSION['auth'] = self::$account->getByUsername($_POST['username']);
            Router::redirect('account');
        };

    }
    public function setDataView()
    {
        $data = self::$account->getById($_SESSION['auth']->id);
        View::render('Account/edit', $data);
    }

    public static function logout()
    {
        session_destroy();
        Router::redirect('');
    }
}

























// $account = new AccountController;
// $data = [
//     'fullname' => 'Yosi Kesuma',
//     'username' => 'ykz',
//     'password' => '1234'
// ];

// $account->register($data);
// var_dump($account);