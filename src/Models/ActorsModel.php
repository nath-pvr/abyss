<?php

namespace App\Models;

class ActorsModel extends GeneralModel{

    public function __construct(){
        parent::__construct();
    }

    //Requête SQL
    public function getAllActors(): array{
        $sql = 'SELECT * FROM actors';
        $req = $this->pdo->prepare($sql);
        $req->execute();
        return $req-> fetchAll();
    }
}