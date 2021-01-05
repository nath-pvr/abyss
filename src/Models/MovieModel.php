<?php

namespace App\Models;


class MovieModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    // Requête SQL pour chercher tous les films de la table
    public function getOneMovie(): void {
        // $sql = 'SELECT * FROM movies WHERE Titre=?';
        // $req = $this->pdo->prepare($sql);
        // $req->execute([$title]);
        // return $req->fetch();
        echo "je suis un film";
    }
}