<?php

namespace App\Models;

class ActorsModel extends GeneralModel{

    public function __construct(){
        parent::__construct();
    }

    //Requête SQL
    public function getAllActors(): array{
        $sql = 'SELECT * FROM artists WHERE id_role=0';
        $req = $this->pdo->prepare($sql);
        $req->execute();
        return $req-> fetchAll();
        
    }

    public function getActorsFromMovie($id){
        $sql = 'SELECT artists.* FROM artists, actor_film, movies WHERE movies.id=? AND actor_film.id_film=movies.id AND actor_film.id_artist=artists.id';
        $req = $this->pdo->prepare($sql);
        $req->execute();
        return $req-> fetchAll();
    }
}