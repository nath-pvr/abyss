<?php

namespace App\Controllers;

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

    public function inscription()
    {
        echo "mot";
    }

    public function connexion()
    {
        echo "connexion";
    }

    public function film()
    {
        // Instanciation d'un nouvel objet MovieModel
        $movieModel = new MovieModel();
        // Utilise la fonction getOneMovie() de la class MovieModel 
        $movie = $movieModel->getOneMovie();
        $template = $this->twig->load('film.html.twig');
        echo $template->render(["movie" => $movie]);
    }

    public function auteurs()
    {
        echo "auteurs";
    }
    public function auteur()
    {
        echo "auteur";
    }

    public function acteurs()
    {
        echo "acteurs";
    }

    public function acteur()
    {
        echo "acteur";
    }
}
