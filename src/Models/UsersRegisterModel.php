<?php


namespace App\Models;

require_once 'functions.php';
class UsersRegisterModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    public function allUsersByPseudo(string $username) {
        $sql = 'SELECT * FROM users WHERE pseudo = ?';
        $req = $this->pdo->prepare($sql);
        $req->execute([$username]);
        return $req->fetch();
    }

    public function allUsersByEmail(string $email) {
        $sql = 'SELECT * FROM users WHERE email = ?';
        $req = $this->pdo->prepare($sql);
        $req->execute([$email]);
        return $req->fetch();
    }

    public function addUser(string $username, string $email): void {
        $sql = 'INSERT INTO users (pseudo, email, password, confirmation_token) VALUES (?, ?, ?, ?)';
        $req = $this->pdo->prepare($sql);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = strRandom(60);
        $req->execute([$username, $email, $password, $token]);
        $userId = $this->pdo->lastInsertId();
    }
}