<?php

namespace ForTech\App\Controller;

use ForTech\App\Model\AnswerModel;

class AnswerController
{
    public static $answer;
    public function __construct()
    {
        self::$answer = new AnswerModel;
    }

    public function createAnswer()
    {
        $data = [
            'user_id' => 4,
            'question_id' => 1,
            'answer' => 'ini jawaban dari YoK',
            'image_ans' => null,
        ];
        if (self::$answer->createAnswer($data)) {
            echo "success create answers";
        } else {
            echo "failed create answers";
        }

    }

    public function editAnswer($id)
    {
        $data = [
            'answer' => 'Saya mmmmmmm BAGAIMANA YAKKKKKKKKKKKKKKKKKKKK',
            'image_ans' => null
        ];
        if (self::$answer->editAnswer($id, $data)) {
            echo "success edit answer";
        } else {
            echo "failed edit answer";
        }

    }

    public function verifyAnswer($id)
    {
        $data = [
            'verified' => 1,
            'id' => $id
        ];
        if (self::$answer->verify($data)) {
            echo "success verify";
        } else {
            echo "failed verify";
        }

    }

    public function delete($id)
    {
        if (self::$answer->delete($id)) {
            echo "success delete";
        } else {
            echo "failed delete";
        }
    }
}