<?php


namespace App\Models;


class UsersModel extends GeneralModel{

    public function __construct() {
        parent::__construct();
    }

    public function addUser()
    {
        $sql = 'INSERT INTO users (pseudo, email, password) VALUES (?, ?, ?)';
        $req = $this->pdo->prepare($sql);
        $req->execute([$_POST['username'], $_POST['email'], $_POST['password']]);
        return $req->fetch();
    }
}