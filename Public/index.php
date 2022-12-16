<?php

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use ForTech\App\Controller\TagController;
use ForTech\App\Core\Router;
use ForTech\App\Controller\AccountController;
use ForTech\App\Controller\AnswerController;
use ForTech\App\Controller\CommentController;
use ForTech\App\Controller\QuestionController;

// Authentications
Router::addRoute('GET', '/login', AccountController::class, 'loginPage', []);
Router::addRoute('POST', '/auth/login', AccountController::class, 'login', []);
Router::addRoute('GET', '/register', AccountController::class, 'registerPage', []);
Router::addRoute('POST', '/auth/register', AccountController::class, 'register', []);
Router::addRoute('GET', '/account', AccountController::class, 'index', []);
Router::addRoute('POST', '/auth/update-profile', AccountController::class, 'setData', []);
Router::addRoute('GET', '/auth/update', AccountController::class, 'setDataView', []);
Router::addRoute('GET', '/auth/delete/:id', AccountController::class, 'delete', []);
Router::addRoute('GET', '/logout', AccountController::class, 'logout', []);

// Forums
Router::addRoute('GET', '/forum/create', QuestionController::class, 'createQuestionView', []);
Router::addRoute('POST', '/forum/create-question', QuestionController::class, 'createQuestion', []);
Router::addRoute('GET', '/forum', QuestionController::class, 'index', []);
Router::addRoute('GET', '/forum/detail/:id', QuestionController::class, 'detail', []);
Router::addRoute('GET', '/forum/edit-question/:id', QuestionController::class, 'editQuestionView', []);
Router::addRoute('POST', '/forum/edit-question/save', QuestionController::class, 'editQuestion', []);
Router::addRoute('GET', '/forum/delete/:id', QuestionController::class, 'delete', []);

// Answers
Router::addRoute('POST', '/answer/create', AnswerController::class, 'createAnswer', []);
Router::addRoute('GET', '/answer/edit/:id', AnswerController::class, 'editAnswer', []);
Router::addRoute('GET', '/answer/delete/:id', AnswerController::class, 'delete', []);
Router::addRoute('GET', '/answer/verify/:id', AnswerController::class, 'verifyAnswer', []);

// Comments
Router::addRoute('POST', '/comment/create', CommentController::class, 'createComment', []);
Router::addRoute('POST', '/comment/reply', CommentController::class, 'replyComment', []);
Router::addRoute('GET', '/comment/edit/:id', CommentController::class, 'editComment', []);
Router::addRoute('GET', '/comment/delete/:id', CommentController::class, 'delete', []);

// Tags
Router::addRoute('GET', '/tags', TagController::class, 'index', []);
Router::addRoute('GET', '/tag/create', TagController::class, 'createTag', []);
Router::addRoute('GET', '/tag/edit/:id', TagController::class, 'editTag', []);
Router::addRoute('GET', '/tag/delete/:id', TagController::class, 'delete', []);
Router::addRoute('GET', '/data-comment', CommentController::class, 'dataComment', []);
Router::addRoute('GET', '/', QuestionController::class, 'home', []);
Router::addRoute('GET', '/image', QuestionController::class, 'upload', []);

Router::run();