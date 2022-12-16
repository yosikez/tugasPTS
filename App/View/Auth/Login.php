<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForTech</title>
    <link rel="stylesheet" href="<?= ForTech\App\Core\Router::url('../Assets/Css/style2.css') ?>" >
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<div class="form-out">
    <div class="form-wrap">
        <h1>Login</h1>
        <form action="<?= ForTech\App\Core\Router::url('auth/login') ?>" method="POST" class="form shadow">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Login" class="shadow">
        </form>
    </div>
</div>