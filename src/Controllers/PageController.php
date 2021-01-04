<?php

namespace App\Controllers;


class PageController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $movieModel = new MovieModel();
        // $movies = $movieModel->getAllMovies();

        // $template = $this->twig->load('Page/index.html.twig');
        // echo $template->render(["movies" => $movies]);
        echo "coucou";
    
    }

}