<?php


namespace App\Models;

require_once '../../../function.php';
class UsersModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    public function allUsersByPseudo() {
        $sql = 'SELECT * FROM users WHERE pseudo = ?';
        $req = $this->pdo->prepare($sql);
        $req->execute([$_POST['username']]);
        return $req->fetch();
    }

    public function allUsersByEmail() {
        $sql = 'SELECT * FROM users WHERE email = ?';
        $req = $this->pdo->prepare($sql);
        $req->execute([$_POST['email']]);
        return $req->fetch();
    }

    public function addUser(): void {
        $sql = 'INSERT INTO users (pseudo, email, password, confirmation_token) VALUES (?, ?, ?, ?)';
        $req = $this->pdo->prepare($sql);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = strRandom(60);
        $req->execute([$_POST['username'], $_POST['email'], $password, $token]);
        $userId = $pdo->lastInsertId();
        header("Location: /");
    }
}