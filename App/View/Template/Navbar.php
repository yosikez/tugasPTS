<nav class="navbar">
    <div class="nav-brand">
        
        <a href="<?= ForTech\App\Core\Router::url('') ?>"><i class='bx bx-message-alt-edit bx-md' color="white"></i></a>
        <a href="<?= ForTech\App\Core\Router::url('forum') ?>">Forum</a>
        <?php if (@$_SESSION['auth']) { ?>
        <a href="<?= ForTech\App\Core\Router::url('account') ?>">Account</a>
        <?php } ?>

    </div>
    <div class="nav-actions">
        <?php if (@$_SESSION['auth']) { ?>
        <a href="<?= ForTech\App\Core\Router::url('logout') ?>">Logout</a>
        <?php } else { ?>
        <a href="<?= ForTech\App\Core\Router::url('login') ?>">Login</a> | 
        <a href="<?= ForTech\App\Core\Router::url('register') ?>">Register</a>
        <?php } ?>
    </div>
</nav>