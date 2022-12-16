<?php
use ForTech\App\Core\Router;

$avatar = $data['user']->avatar;
?>

<div class="container">
    <div class="side">
        <img src="<?= $avatar === null ? Router::url('../Assets/Img/profile.png') : Router::url("../Storage/Profile/$avatar") ?>" alt="profile" width="100px" height="100px" style="border-radius: 50%">
        <h1>
            <?= $data['user']->username ?>
        </h1>
        <div class="menu">
            <button class="shadow"><a href="<?= ForTech\App\Core\Router::url('auth/update') ?>">Edit
                    Profile</a></button>
            <button class="list-button">List Question</button>
        </div>
    </div>
    <div class="main-card">
        <div class="card-wrap">
            <div class="card">
                <h2>About</h2>
                <p>
                    <?= $data['user']->about == null ? "Insert your Data" : $data['user']->about ?>
                </p>
            </div>
            <div class="card">
                <h2>Address</h2>
                <p>
                    <?= $data['user']->address == null ? "Insert your Data" : $data['user']->address ?>
                </p>
            </div>
            <div class="card">
                <h2>Job</h2>
                <p>
                    <?= $data['user']->job == null ? "Insert your Data" : $data['user']->job ?>
                </p>
            </div>
            <div class="card">
                <h2>Organization</h2>
                <p>
                    <?= $data['user']->organization == null ? "Insert your Data" : $data['user']->organization ?>
                </p>
            </div>
        </div>

        <div class="acc-list-question">
            <div class="card-ques">
                <h2>Question</h2>
                <div class="question-wrap">
                    <?php foreach (array_reverse($data['question']) as $dt): ?>
                    <div class="question shadow">
                        <a href="<?= ForTech\App\Core\Router::url("forum/detail/$dt->id") ?>">
                            <?= $dt->title ?>
                        </a>
                        <p>
                            <?= $dt->descriptions ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= ForTech\App\Core\Router::url('../Assets/JS/Answers.js') ?>"></script>