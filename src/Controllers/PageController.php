<?php

namespace App\Controllers;

use App\Models\ActorModel;
use App\Models\ActorsModel;
use App\Models\MovieModel;
use App\Models\MoviesModel;

class PageController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        $moviesModel = new MoviesModel(); // Instanciation de la class MoviesModel
        $movies = $moviesModel->getAllMovies(); // Utilise la fonction getAllMovies() de la classe MoviesModel
        $template = $this->twig->load('index.html.twig');
        echo $template->render(["movies" => $movies]);
    }

    public function inscription(): void
    {
        echo "mot";
    }

    public function connexion(): void
    {
        echo "connexion";
    }

    public function film($id): void
    {
        // Instanciation d'un nouvel objet MovieModel
        $movieModel = new MovieModel();
        // Utilise la fonction getOneMovie() de la class MovieModel 
        $movie = $movieModel->getOneMovie($id);
        $template = $this->twig->load('film.html.twig');
        echo $template->render(["movie" => $movie]);
    }

    public function auteurs(): void
    {
        echo "auteurs";
    }
    public function auteur(): void
    {
        echo "auteur";
    }

    public function actors(): void
    {
      $actorsModel = new ActorsModel();
      
      $actors = $actorsModel->getAllActors();

      $template = $this->twig->load('actors.html.twig');
      echo $template->render(["actors"=> $actors]);

    }

    public function acteur($id): void
    {
       // Instanciation d'un nouvel objet ActorModel
       $actorModel = new ActorModel();
       // Utilise la fonction getOneActor() de la class ActorModel 
       $actor = $actorModel->getOneActor($id);
       $template = $this->twig->load('actor.html.twig');
       echo $template->render(["actor" => $actor]); 
    }
}
