<div class="form-out add-question">
    <div class="form-wrap">
        <h1>Edit Question</h1>
        <form action="<?= ForTech\App\Core\Router::url('forum/edit-question/save') ?>" method="POST" class="form shadow"
            enctype="multipart/form-data">
            <input type="hidden" name="question_id" value="<?= $data['question']->id ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" required value="<?= $data['question']->title ?>">
            </div>
            <div class="form-group">
                <label for="descriptions">Description</label>
                <textarea class="textarea-desc" name="descriptions" id="descriptions" cols="30" rows="5"
                    class="descriptions" required><?= $data['question']->descriptions ?></textarea>
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" required value="<?= $data['question']->code ?>">
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select class="js-example-basic-multiple" name="tags[]" id="tags" multiple="multiple">
                    <?php foreach ($data['tags'] as $dt): ?>
                        
                            <option value="<?= $dt->id ?>" <?php foreach($data['question_tags'] as $qtag) : ?><?= $dt->id==$qtag->tag_id ? 'disabled="disabled"' : ""?>>
                                #<?= $dt->name ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" value="<?= $data['question']->image_question ?>">
            </div>
            <input type="submit" value="Update" class="shadow">
        </form>
    </div>
    <script src="<?= ForTech\App\Core\Router::url('../Assets/JS/Answers.js') ?>"></script>
</div>