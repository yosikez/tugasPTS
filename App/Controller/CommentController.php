<?php

namespace ForTech\App\Controller;

use ForTech\App\Core\Router;
use ForTech\App\Core\View;
use ForTech\App\Model\CommentModel;

class CommentController
{
    public static $comment;
    public function __construct()
    {
        self::$comment = new CommentModel;
    }

    public function dataComment()
    {
        $data['comment'] = self::$comment->getCommentByQuestionId(30);
        View::render('Comment/Comment', $data);
    }

    public function createComment()
    {
        $questionId = $_POST['question_id'];

        $data = [
            'question_id' => $questionId,
            'user_id' => $_POST['user_id'],
            'comment' => $_POST['comment'],
        ];
        if (self::$comment->createComment($data)) {
            Router::redirect("forum/detail/$questionId");
        } else {
            echo "failed create comment";
        }
    }

    public function replyComment()
    {
        $questionId = $_POST['question_id'];
        $data = [
            'comment_id' => $_POST['comment_id'],
            'user_id' => $_POST['user_id'],
            'comment' => $_POST['comment']
        ];
        if (self::$comment->replyComment($data)) {
            $msg = ['msg'=>'success'];
            return json_encode($msg);
        } else {
            $msg = ['msg'=>'error'];
            return json_encode($msg);
        }

    }

    public function editComment($id)
    {
        $data = [
            'comment' => 'test edit',
        ];
        if (self::$comment->editComment($id, $data)) {
            echo "success edit comment";
        } else {
            echo "failed edit comment";
        }

    }

    public function delete($id)
    {
        if (self::$comment->delete($id)) {
            echo "success delete";
        } else {
            echo "failed delete";
        }
    }
}