<?php

namespace App\Models;

class UsersModel extends GeneralModel{

    public function __construct() {
        parent::__construct();
    }
    
    
    public function userSelected($username){
        // récupération User
       
        $sql = 'SELECT user FROM users WHERE username = :username OR email = :username';
        $req =$this->pdo->prepare($sql);
        $req->execute([":username"=>$username]);
        $req->fetch();
       
    }
    
    public function userConnectedToken($user){
        $remember_token = strRandom(250);
        $req = $this->pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?');
        $req->execute([$remember_token, $user->id]);
        setcookie('remember', $user->id .'==' . $remember_token . sha1($user->id . 'kraken'), time() + 60 * 60 * 24 * 7 );
    }    
}

