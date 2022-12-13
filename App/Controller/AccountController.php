<?php

namespace ForTech\App\Controller;

use ForTech\App\Model\AccountModel;

class AccountController
{
    public static $account;

    public function __construct()
    {
        self::$account = new AccountModel;
    }

    public function index()
    {
        $data = self::$account->getAll();
        var_dump($data);
    }

    public function register()
    {
        $data = [
            'fullname' => 'YoK',
            'username' => 'yok',
            'password' => password_hash('1234', PASSWORD_DEFAULT)
        ];
        if (self::$account->register($data)) {
            echo "berhasil register";
        } else {
            echo "gagal register";
        }
    }

    public static function login()
    {
        $user = self::$account->getByUsername('kzm');
        if ($user && password_verify('124', $user->password)) {
            $_SESSION['auth'] = $user;
            var_dump($_SESSION['auth']);
            return;
        } else {
            echo "login failed";
        }

    }

    public function setData()
    {
        $data = [
            'about' => 'seorang manusia',
            'avatar' => null,
            'address' => 'karawang',
            'job' => 'pelajar',
            'organization' => 'technopark',
            'id' => 1
        ];
        var_dump(self::$account->setUserData($data));
    }

    public static function logout()
    {
        session_destroy();
        echo ("logout");
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