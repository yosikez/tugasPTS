<?php

namespace ForTech\App\Controller;

use ForTech\App\Model\CommentModel;

class CommentController
{
    public static $comment;
    public function __construct()
    {
        self::$comment = new CommentModel;
    }

    public function createComment()
    {
        $data = [
            'question_id' => 1,
            'user_id' => 4,
            'comment' => 'INi komen Dari Yok',
        ];
        if (self::$comment->createComment($data)) {
            echo "success create comment";
        } else {
            echo "failed create comment";
        }
    }

    public function replyComment()
    {
        $data = [
            'comment_id' => 2,
            'user_id' => 2,
            'comment' => 'ini reply comment dari kesuma'
        ];
        if (self::$comment->replyComment($data)) {
            echo "success create reply comment";
        } else {
            echo "failed create reply comment";
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