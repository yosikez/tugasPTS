<?php

namespace ForTech\App\Model;

use ForTech\App\Core\Database;


class QuestionModel extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT questions.*, account.username AS username FROM questions JOIN account ON questions.user_id = account.id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getDetail($id)
    {
        $statement = self::$conn->prepare("SELECT questions.*, account.username AS usernameQuestion FROM questions LEFT JOIN account ON questions.user_id = account.id WHERE questions.id=:id");
        $statement->execute(['id' => $id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function createQuestion($question, $qtag)
    {
        $statement = self::$conn->prepare("INSERT INTO questions (user_id, title, descriptions, code, image_question) VALUES (:user_id, :title, :descriptions, :code, :image_question)");
        $statement->execute($question);
        $last = self::$conn->lastInsertId();
        $n = count($qtag);
        $statement = self::$conn->prepare("INSERT INTO question_tags (question_id, tag_id)VALUES (:question_id, :tag_id)");

        for ($i = 0; $i < $n; $i++) {
            $data = [
                'question_id' => $last,
                'tag_id' => $qtag[$i]
            ];
            $statement->execute($data);
        }
    }

    public function editQuestion($id, $data)
    {
        $statement = self::$conn->prepare("UPDATE questions SET title=:title, descriptions=:descriptions, code=:code, image_question=:image_question WHERE id=:id");
        return $statement->execute(array_merge($data, ['id' => $id]));
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM questions WHERE id=:id");
        return $statement->execute(['id' => $id]);
    }
}