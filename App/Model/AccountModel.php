<?php

namespace ForTech\App\Model;

use ForTech\App\Core\Database;

class AccountModel extends Database
{
    public function register($data)
    {
        $statement = self::$conn->prepare("INSERT INTO account (fullname, username, password) VALUES (:fullname, :username, :password)");
        return $statement->execute($data);
    }

    public function setUserData($data)
    {
        $statement = self::$conn->prepare("UPDATE account SET fullname=:fullname, username=:username, about=:about, avatar=:avatar, address=:address, job=:job, organization=:organization WHERE id=:id");
        return $statement->execute($data);
    }

    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT * FROM account");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM account WHERE id=:id");
        $statement->execute(['id' => $id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function getByUsername($username)
    {
        $statement = self::$conn->prepare("SELECT * FROM account WHERE username=:username");
        $statement->execute(['username' => $username]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM account WHERE id=:id");
        return $statement->execute(['id' => $id]);
    }

}