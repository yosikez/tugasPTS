<div class="form-out add-answers">
    <div class="form-wrap">
        <h1>Add Answer</h1>
        <form action="<?= ForTech\App\Core\Router::url('forum/create-question') ?>" method="POST" class="form shadow">
        <input type="hidden" name="user_id" value="<?= $_SESSION['auth']->id?>">
        <input type="hidden" name="question_id" value<?= $data['question']->id?>>
            <div class="form-group">
                <label for="answer">Answer</label>
                <input type="text" name="answer">
            </div>
            <div class="form-group">
                <label for="image_ans">Image</label>
                <input type="file" name="image_ans" class="fileUpload">
            </div>
            <input type="submit" value="Create" class="shadow">
        </form>
    </div>
</div>