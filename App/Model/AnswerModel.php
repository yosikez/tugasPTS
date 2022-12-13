<?php
namespace ForTech\App\Model;

use ForTech\App\Core\Database;

class AnswerModel extends Database
{
    public function getByQuestionId($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM answers WHERE question_id=:id");
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function createAnswer($data)
    {
        $statement = self::$conn->prepare("INSERT INTO answers (user_id, question_id, answer, image_ans) VALUES (:user_id, :question_id, :answer, :image_ans)");
        return $statement->execute($data);
    }

    public function editAnswer($id, $data)
    {
        $statement = self::$conn->prepare("UPDATE answers SET answer=:answer, image_ans=:image_ans WHERE id=:id");
        return $statement->execute(array_merge($data, ['id' => $id]));
    }

    public function verify($data)
    {
        $statement = self::$conn->prepare("UPDATE answers SET verified=:verified WHERE id=:id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM answers WHERE id=:id");
        return $statement->execute(['id' => $id]);
    }
}