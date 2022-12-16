<?php

namespace ForTech\App\Controller;

use ForTech\App\Core\Router;
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
        if(!empty($_FILES['image'])){
            $filename = md5($_FILES['image']['name']);
            $tmpFilename = $_FILES['image']['tmp_name'];
            $direktori = '../Storage/Answers/';
            if(!move_uploaded_file($tmpFilename, $direktori . $filename)){
                $filename = null;
            };
        } 
            
        $questionId = $_POST['question_id'];
        $data = [
            'user_id' => $_POST['user_id'],
            'question_id' => $questionId,
            'answer' => $_POST['answer'],
            'image_ans' => $filename,
        ];
        if (self::$answer->createAnswer($data)) {
            Router::redirect("forum/detail/$questionId");
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