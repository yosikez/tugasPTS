<?php

namespace ForTech\App\Controller;

use ForTech\App\Core\Router;
use ForTech\App\Core\View;
use ForTech\App\Model\CommentModel;
use ForTech\App\Model\QuestionModel;
use ForTech\App\Model\AnswerModel;
use ForTech\App\Model\TagModel;



class QuestionController
{
    public static $question;
    public static $answer;
    public static $comment;
    public static $tag;
    public static $question_tags;
    public function __construct()
    {
        self::$question = new QuestionModel;
        self::$answer = new AnswerModel;
        self::$tag = new TagModel;
        self::$comment = new CommentModel;

    }

    public function home()
    {
        View::render('Home/index');
    }

    public function index()
    {
        $data = self::$question->getAll();
        View::render('Question/index', $data);
    }

    public function detail($id)
    {
        $data['question'] = self::$question->getDetail($id);
        $data['answers'] = self::$answer->getByQuestionId($id);
        $data['comment'] = self::$comment->getCommentByQuestionId($id);
        $data['tag'] = self::$tag->getDataByIdQuestions($id);
        View::render('Question/detail', $data);

    }

    public function createQuestion()
    {

        if(!empty($_FILES['image'])){
            $filename = md5($_FILES['image']['name']);
            $tmpFilename = $_FILES['image']['tmp_name'];
            $direktori = '../Storage/Questions/';
            if(!move_uploaded_file($tmpFilename, $direktori . $filename)){
                $filename = null;
            };
        } 
            

        $userId = $_SESSION['auth']->id;
        $question = [
            'user_id' => $userId,   
            'title' => $_POST['title'],
            'descriptions' => $_POST['descriptions'],
            'code' => $_POST['code'],
            'image_question' => $filename,
        ];

        $qtag = $_POST['tags'];

        if (self::$question->createQuestion($question, $qtag)) {
            Router::redirect('forum');
        } else {
            Router::redirect('forum/create');
        }
    }

    public function createQuestionView()
    {
        $data = self::$tag->getAll();
        View::render('Question/addQuestion', $data);
    }

    public function editQuestionView($id){
        $data['tags'] = self::$tag->getAll();
        $data['question'] = self::$question->getDetail($id);
        $data['question_tags'] = self::$question->getQuestionTags($id);
        View::render('Question/edit', $data);
    }

    public function editQuestion()
    {

        if(!empty($_FILES['image'])){
            $filename = md5($_FILES['image']['name']);
            $tmpFilename = $_FILES['image']['tmp_name'];
            $direktori = '../Storage/Questions/';
            if(!move_uploaded_file($tmpFilename, $direktori . $filename)){
                $filename = null;
            };
        } 
        $id = $_POST['question_id'];
        $qtag = @$_POST['tags'];
        $data = [
            'title' => $_POST['title'],
            'descriptions' => $_POST['descriptions'],
            'code' => $_POST['code'],
            'image_question' => $filename
        ];
        if (self::$question->editQuestion($id, $data, $qtag)) {
            Router::redirect("forum/detail/$id");
        } else {
            Router::redirect("forum/edit-question/$id");
        }

    }

    public function delete($id)
    {
        if (self::$question->delete($id)) {
            Router::redirect('account');
        } else {
            echo "failed delete";
        }
    }
}