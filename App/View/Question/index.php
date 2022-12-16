<div class="container">
    <div class="sidebar shadow">
        <div class="sidebar-item">
            <i class='bx bx-question-mark bx-md' color="white"></i>
            <a href="<?= ForTech\App\Core\Router::url('forum') ?>">Forum</a>
        </div>
        <div class="sidebar-item">
            <i class='bx bx-purchase-tag-alt bx-md' color="white"></i>
            <a href="<?= ForTech\App\Core\Router::url('tags') ?>">Tags</a>
        </div>
    </div>
    <div class="questions">
        <div class="header shadow">
            <h1>Forum</h1>
            <a class="add-questions" href="<?= ForTech\App\Core\Router::url('forum/create') ?>">Add
                Question</a>
        </div>
        <div class="question-wrap">
            <?php foreach (array_reverse($data) as $dt): ?>
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