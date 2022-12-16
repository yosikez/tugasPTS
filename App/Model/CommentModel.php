<?php
namespace ForTech\App\Model;

use ForTech\App\Core\Database;

class CommentModel extends Database
{
    public function getCommentByQuestionId($id)
    {
        $statement = self::$conn->prepare("SELECT comments.*, account.username AS commentName FROM comments JOIN account ON comments.user_id = account.id WHERE question_id=:id");
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getReplyComment($id)
    {
        $statement = self::$conn->prepare("SELECT comments.*, account.username AS commentName FROM comments JOIN account ON comments.user_id = account.id WHERE comment_id=:id");
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function createComment($data)
    {
        $statement = self::$conn->prepare("INSERT INTO comments (question_id, user_id, comment) VALUES (:question_id, :user_id, :comment)");
        return $statement->execute($data);
    }

    public function editComment($id, $data)
    {
        $statement = self::$conn->prepare("UPDATE comments SET comment=:comment WHERE id=:id");
        return $statement->execute(array_merge($data, ['id' => $id]));
    }

    public function replyComment($data)
    {
        $statement = self::$conn->prepare("INSERT INTO comments (comment_id, user_id, comment) VALUES (:comment_id, :user_id, :comment)");
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM comments WHERE id=:id");
        return $statement->execute(['id' => $id]);
    }
}