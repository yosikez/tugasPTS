<?php
use ForTech\App\Model\CommentModel;

global $reply;
$reply = new CommentModel;
?>
<div class="detail">
    <div class="detail-question">
        <div class="author">
            <div class="author-data">
                <p>
                    Author : <?= $data['question']->usernameQuestion ?>
                </p>
                <div class="tags-wrap">
                    Tags:
                    <?php foreach ($data['tag'] as $dt): ?>
                    <p class="tags">
                        <?="#" . $dt->tags ?>
                    </p>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
            $idQuestions = $data['question']->id;
            if ($data['question']->user_id === @$_SESSION['auth']->id) { ?>
            <div class="action-button">
            <button class="delete-question shadow"> <a
                    href="<?= ForTech\App\Core\Router::url("forum/delete/$idQuestions") ?>">Delete</a></button>
            <button class="delete-question shadow"> <a
                    href="<?= ForTech\App\Core\Router::url("forum/edit-question/$idQuestions") ?>">Update</a></button>
                    
            </div>
            <?php } else {
                echo ("");
            } ?>
        </div>
        <div class="que-detail">
            <h1 class="title">
                <?= $data['question']->title ?>
            </h1>
            <h2 class="desc">Description</h2>
            <p class="desc">
                <?= $data['question']->descriptions ?>
            </p>
            <h2 class="desc">Code</h2>
            <p class="code desc">
                <?= $data['question']->code ?>
            </p>
            <?php $image = $data['question']->image_question ?>
            <?php if (@$image != null) { ?>
                    <?=  $image != null ? '<img class="desc img-ans"
                        src="' . ForTech\App\Core\Router::url("../Storage/Answers/$image") . '" alt="error"
                        width="600px">' : " " ?>
                <?php } else {
                echo "<span></span>";
            } ?>
                <div class="comment-list">
                    <h2>Comment</h2>
                    <?php foreach (array_reverse($data['comment']) as $dt): ?>
                    <div class="comment-card">
                        <div class="hcomm">
                            <h4>
                                <?= $dt->commentName ?>
                            </h4>
                            <button class="shadow button-reply" id="<?= $dt->id ?>">
                                Reply</a>
                            </button>
                        </div>
                        <p>
                            <?= $dt->comment ?>
                        </p>
                    </div>


                    <?php
                        getReply($dt->id);
                    endforeach; ?>
                    <button class="comment-button"><i class='bx bx-plus'></i>Add Comment</button>
                </div>
        </div>

    </div>
    <div class="answers">
        <div class="ans-act">
            <h1>Answers</h1>
            <button class="ans-button shadow">Ans</button>
        </div>
        <div class="answers-lv2">
            <?php foreach (array_reverse($data['answers']) as $ans): ?>
            <div class="answer">
                <div class="author">
                    <div class="author-data">
                        <p>
                            <?= $ans->answerName ?>
                        </p>
                        <p class="verified">Verified<i class='bx bx-x'></i></p>
                    </div>
                </div>
                <div class="ans">
                    <p>
                        <?= $ans->answer ?>
                    </p>
                    <?php if (@$ans->image_ans != null) {
                    $imageAns = $ans->image_ans; ?>
                    <?= $ans->image_ans !=null ? '<img class="desc img-ans"
                        src="' . ForTech\App\Core\Router::url("../Storage/Answers/$imageAns") . '" alt="error"
                        width="600px">' : "" ?>
                        <?php } else {
                    echo "<span></span>";
                    } ?>

                    <button class="comment"><i class='bx bx-plus'></i>Add Comment</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="bg-modal"></div>
    <div class="form-out add-answers">
        <div class="form-wrap ac">
            <div class="ans-form-act">
                <h1>Add Answer</h1>
                <i class='bx bx-x bx-md close'></i>
            </div>
            <form action="<?= ForTech\App\Core\Router::url('answer/create') ?>" method="POST" class="form-commt"
                enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?= $_SESSION['auth']->id ?>">
                <input type="hidden" name="question_id" value="<?= $data['question']->id ?>">
                <div class="form-group ac">
                    <label for="answer">Answer</label>
                    <textarea name="answer" id="answer" cols="50" rows="5" class="descriptions" required></textarea>
                </div>
                <div class="form-group ac">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <input type="submit" value="Create" class="shadow create">
            </form>
        </div>
    </div>
    <div class="form-out add-comment-question">
        <div class="form-wrap ac">
            <div class="com-form-act">
                <h1>Comment</h1>
                <i class='bx bx-x bx-md close'></i>
            </div>
            <form action="<?= ForTech\App\Core\Router::url('comment/create') ?>" method="POST" class="form-commt">
                <input type="hidden" name="user_id" value="<?= $_SESSION['auth']->id ?>">
                <input type="hidden" name="question_id" value="<?= $data['question']->id ?>">
                <div class="form-group ac">
                    <textarea name="comment" id="comment" cols="50" rows="5" class="descriptions" required></textarea>
                </div>
                <input type="submit" value="submit" class="shadow create">
            </form>
        </div>
    </div>

    <div class="form-out add-comment">
        <div class="form-wrap ac">
            <div class="com-form-act">
                <h1>Comment</h1>
                <i class='bx bx-x bx-md close'></i>
            </div>
            <form method="POST" class="form-commit">
                <input type="hidden" name="question_id" value="<?= $data['question']->id ?>">
                <input type="hidden" name="user_id" value="<?= $_SESSION['auth']->id ?>">
                <input type="hidden" name="comment_id">
                <div class="form-group ac">
                    <textarea name="comment-reply" id="comment-reply" cols="50" rows="5" class="descriptions"
                        required></textarea>
                </div>
                <input type="submit" value="submit" class="shadow create">
            </form>
        </div>
    </div>
    <script type="text/javascript">
        let BASE_URL = "<?= ForTech\App\Core\Router::url('') ?>";
    </script>
    <script src="<?= ForTech\App\Core\Router::url('../Assets/JS/Comment.js') ?>"></script>
    <script src="<?= ForTech\App\Core\Router::url('../Assets/JS/Answers.js') ?>"></script>
</div>

<?php

function getReply($id)
{
    global $reply;
    $comRep = $reply->getReplyComment($id);
    foreach (array_reverse($comRep) as $Rep):
        $margin = 100;
?>
        <div class="comment-card" style="margin-left:<?= $margin ?>px;">
            <div class="hcomm">
                <h4>
                    <?= $Rep->commentName ?>
                </h4>
                <button class="shadow button-reply" id="<?= $Rep->id ?>">Reply</button>
            </div>
            <p>
                <?= $Rep->comment ?>
            </p>
        </div>

<?php
        $margin += $margin;
        getReply($Rep->id);
    endforeach;

} ?>