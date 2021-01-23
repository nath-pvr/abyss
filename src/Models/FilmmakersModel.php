<?php

namespace App\Models;


class FilmmakersModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    // Requête SQL pour chercher les auteurs des films de la table toutes la table
    public function getAllFilmmakers() : array {
        $sql = 'SELECT * FROM artists WHERE id_role=1';
        $req = $this->pdo->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}