<?php

namespace App\Models;


class MovieModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    // Requête SQL pour chercher tous les films de la table
    public function getOneMovie($id) {
         $sql = 'SELECT * FROM movies WHERE id = :id';
         $req = $this->pdo->prepare($sql);
         $req->execute([":id" => $id]);
         return $req->fetch();
    }
}