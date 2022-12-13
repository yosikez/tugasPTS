<?php

namespace ForTech\App\Model;

use ForTech\App\Core\Database;

class TagModel extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT * FROM tags");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function createTag($data)
    {
        $statement = self::$conn->prepare("INSERT INTO tags (name) VALUES (:name)");
        return $statement->execute($data);
    }

    public function editTag($id, $data)
    {
        $statement = self::$conn->prepare("UPDATE tags SET name=:name WHERE id=:id");
        return $statement->execute(array_merge($data, ['id' => $id]));
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM tags WHERE id=:id");
        return $statement->execute(['id' => $id]);
    }
}