<?php

namespace ForTech\App\Controller;

use ForTech\App\Core\View;
use ForTech\App\Model\TagModel;

class TagController
{
    public static $tag;


    public function __construct()
    {
        self::$tag = new TagModel;
    }

    public function index()
    {
        $data = self::$tag->getAll();
        View::render('Tags/index');
    }

    public function createTag()
    {
        $data = [
            'name' => "java",
        ];
        if (self::$tag->createTag($data)) {
            echo "success create tag";
        } else {
            echo "failed create tag";
        }
    }
    public function editTag($id)
    {
        $data = [
            'name' => 'rev',
        ];
        if (self::$tag->editTag($id, $data)) {
            echo "success edit tag";
        } else {
            echo "failed edit tag";
        }

    }

    public function delete($id)
    {
        if (self::$tag->delete($id)) {
            echo "success delete";
        } else {
            echo "failed delete";
        }
    }
}