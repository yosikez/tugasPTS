<div class="form-out add-question">
    
    <div class="form-wrap">
        <h1>Add Question</h1>
        <form action="<?= ForTech\App\Core\Router::url('forum/create-question') ?>" method="POST" class="form shadow"
            enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" required>
            </div>
            <div class="form-group">
                <label for="descriptions">Description</label>
                <textarea class="textarea-desc" name="descriptions" id="descriptions" cols="30" rows="5"
                    class="descriptions" required></textarea>
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" required>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select class="js-example-basic-multiple" name="tags[]" id="tags" multiple="multiple" required>
                    <?php foreach ($data as $dt): ?>
                    <option value="<?= $dt->id ?>">#
                        <?= $dt->name ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                    </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <input type="submit" value="Create" class="shadow">
        </form>
    </div>

    <script src="<?= ForTech\App\Core\Router::url('../Assets/JS/Answers.js') ?>"></script>
</div>