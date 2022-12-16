<?php
namespace ForTech\App\Core;

class View
{
    public static function render($view, $data = [])
    {
        require_once __DIR__.'/../View/Template/header.php';
        require_once __DIR__.'/../View/Template/navbar.php';
        require_once __DIR__."/../View/{$view}.php";
        require_once __DIR__.'/../View/Template/footer.php';    
    }

    public static function renderLogin($view)
    {
        require_once __DIR__."/../View/{$view}.php";
    }
}