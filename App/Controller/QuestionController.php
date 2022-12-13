<?php

namespace ForTech\App\Controller;

use ForTech\App\Model\CommentModel;
use ForTech\App\Model\QuestionModel;
use ForTech\App\Model\AnswerModel;



class QuestionController
{
    public static $question;
    public static $answer;
    public static $comment;
    public function __construct()
    {
        self::$question = new QuestionModel;
        self::$answer = new AnswerModel;
        self::$comment = new CommentModel;
    }

    public function index()
    {
        $data = self::$question->getAll();
        var_dump($data);
    }

    public function detail($id)
    {
        $data = self::$question->getDetail($id);
        $data2 = self::$answer->getByQuestionId($id);
        $data3 = self::$comment->getCommentByQuestionId($id);

        var_dump($data);
        var_dump($data2);
        var_dump($data3);

        for ($i = 0; $i < count($data3); $i++) {
            var_dump(self::$comment->getReplyComment($data3[$i]->id));
        }
    }

    public function createQuestion()
    {
        $question = [
            'user_id' => 4,
            'title' => 'Test Multi Tag?',
            'descriptions' => 'Test Multi Tag dengan for',
            'code' => null,
            'image_question' => null,
        ];

        $qtag = [1, 3];

        if (self::$question->createQuestion($question, $qtag)) {
            echo "success create question";
        } else {
            echo "failed create question";
        }
    }

    public function editQuestion($id)
    {
        $data = [
            'title' => 'Cara agar bisa terbang?',
            'descriptions' => 'Saya memiliki beberapa masalah pada saat akan makan jadinya takut mati',
            'code' => 'whwhwhwhwwhw',
            'image_question' => null
        ];
        if (self::$question->editQuestion($id, $data)) {
            echo "success edit question";
        } else {
            echo "failed edit question";
        }

    }

    public function delete($id)
    {
        if (self::$question->delete($id)) {
            echo "success delete";
        } else {
            echo "failed delete";
        }
    }
}