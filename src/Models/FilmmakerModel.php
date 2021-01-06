<?php

namespace App\Models;


class FilmmakerModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    // Requête SQL pour chercher l'auteur d'un films de la table
    public function getOneFilmmaker($id) {
         $sql = 'SELECT * FROM filmmaker WHERE id = :id';
         $req = $this->pdo->prepare($sql);
         $req->execute([":id" => $id]);
         return $req->fetch();
    }
}