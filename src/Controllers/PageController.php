<?php

namespace App\Controllers;

use App\Models\MovieModel;
use App\Models\MoviesModel;
use App\Models\FilmmakerModel;


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

    public function filmmakers(): void
    {
        echo "auteurs";
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

    public function acteurs(): void
    {
        echo "acteurs";
    }

    public function acteur(): void
    {
        echo "acteur";
    }
}
