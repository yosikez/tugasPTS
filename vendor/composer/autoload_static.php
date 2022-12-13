<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3503dc1bf8498edfee92a110863cf008
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'ForTech\\App\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ForTech\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ForTech\\App\\Controller\\AccountController' => __DIR__ . '/../..' . '/App/Controller/AccountController.php',
        'ForTech\\App\\Controller\\AnswerController' => __DIR__ . '/../..' . '/App/Controller/AnswerController.php',
        'ForTech\\App\\Controller\\CommentController' => __DIR__ . '/../..' . '/App/Controller/CommentController.php',
        'ForTech\\App\\Controller\\QuestionController' => __DIR__ . '/../..' . '/App/Controller/QuestionController.php',
        'ForTech\\App\\Controller\\TagController' => __DIR__ . '/../..' . '/App/Controller/TagController.php',
        'ForTech\\App\\Core\\Database' => __DIR__ . '/../..' . '/App/Core/Database.php',
        'ForTech\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'ForTech\\App\\Model\\AccountModel' => __DIR__ . '/../..' . '/App/Model/AccountModel.php',
        'ForTech\\App\\Model\\AnswerModel' => __DIR__ . '/../..' . '/App/Model/AnswerModel.php',
        'ForTech\\App\\Model\\CommentModel' => __DIR__ . '/../..' . '/App/Model/CommentModel.php',
        'ForTech\\App\\Model\\QuestionModel' => __DIR__ . '/../..' . '/App/Model/QuestionModel.php',
        'ForTech\\App\\Model\\TagModel' => __DIR__ . '/../..' . '/App/Model/TagModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3503dc1bf8498edfee92a110863cf008::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3503dc1bf8498edfee92a110863cf008::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3503dc1bf8498edfee92a110863cf008::$classMap;

        }, null, ClassLoader::class);
    }
}
