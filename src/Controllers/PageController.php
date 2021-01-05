<?php

namespace App\Controllers;


use App\Models\MoviesModel;
class PageController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
//         $moviesModel = new MoviesModel(); // Instanciation de la class MoviesModel
//         $movies = $moviesModel->getAllMovies(); // Utilise la fonction getAllMovies() de la classe MoviesModel
            $template = $this->twig->load('index.html.twig');
            $movies = ["a", "b", "c"];
            echo $template->render(["movies" => $movies]);
    
    }

    public function inscription() {
        echo "mot";
    }

    public function connexion() {
        echo "connexion";
    }

}