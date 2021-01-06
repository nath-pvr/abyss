<?php

namespace App\Models;


class ActorModel extends GeneralModel {

    public function __construct() {
        parent::__construct();
    }

    // Requête SQL pour chercher tous les films de la table
    public function getOneActor($id) {
         $sql = 'SELECT * FROM actors WHERE id = :id';
         $req = $this->pdo->prepare($sql);
         $req->execute([":id" => $id]);
         return $req->fetch();
    }
}