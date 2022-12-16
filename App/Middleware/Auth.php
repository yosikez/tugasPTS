<?php
namespace ForTech\App\Middleware;

use ForTech\App\Core\Router;

// middleware adalah digunakan untuk menghandel sebelum masuk kedalam auth
class Auth
{
    function before(): void
    {
        if($_SESSION['auth'] == null)
        {
            Router::redirect('/login');
        }
    }
}