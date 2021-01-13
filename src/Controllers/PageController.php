<?php

namespace App\Controllers;

use App\Models\ActorModel;
use App\Models\ActorsModel;
use App\Models\MovieModel;
use App\Models\MoviesModel;
use App\Models\FilmmakerModel;
use App\Models\FilmmakersModel;


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

    public function connexion(): void
    {
        echo "connexion";
    }

    //TODO à Ajouter dans la partie connexion + Modifier le code pour confirmer l'inscription
    public function confirm($id, $token): void
    {
        //TODO $id et $token à récupérer dans la bdd
        echo 'Bonjour '. $id . ', tu as confirmé le compte avec le token ' .  $token . '.';
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

    public function filmmakers(): void
    {
        $filmmakersModel = new FilmmakersModel(); // Instanciation de la class FilmakersModel
        $filmmakers = $filmmakersModel->getAllFilmmakers(); // Utilise la fonction getAllFilmmakers() de la classe FilmmakersModel
        $template = $this->twig->load('filmmakers.html.twig');
        echo $template->render(["filmmakers" => $filmmakers]);
    }

    public function filmmaker($id): void
    {
         // Instanciation d'un nouvel objet Filmmaker
        $filmmakerModel = new FilmmakerModel();
        // Utilise la fonction getOneFilmmaker() de la class MovieModel 
        $filmmaker = $filmmakerModel->getOneFilmmaker($id);
        $template = $this->twig->load('filmmaker.html.twig');
        echo $template->render(["filmmaker" => $filmmaker]);
    }

    public function actors(): void
    {
      $actorsModel = new ActorsModel();
      
      $actors = $actorsModel->getAllActors();

      $template = $this->twig->load('actors.html.twig');
      echo $template->render(["actors"=> $actors]);

    }

    public function actor($id): void
    {
       // Instanciation d'un nouvel objet ActorModel
       $actorModel = new ActorModel();
       // Utilise la fonction getOneActor() de la class ActorModel 
       $actor = $actorModel->getOneActor($id);
       $template = $this->twig->load('actor.html.twig');
       echo $template->render(["actor" => $actor]); 
    }
}
