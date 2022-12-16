<?php
namespace ForTech\App\Middleware;

use ForTech\App\Core\Router;


class Guest
{
    function before(): void
    {
        if(@$_SESSION['auth'])
        {
            Router::redirect('/librarians');
        }
    }
}