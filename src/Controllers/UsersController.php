<?php


namespace App\Controllers;


use App\Models\UsersModel;

class UsersController extends GeneralController {

    private array $error = [];

    public function __construct() {
        parent::__construct();
    }

    // Vérification du pseudo
    private function usernameVerify($username): void {
        if (!empty($username)) {
            // TODO ce qui a à faire après la vérification
            echo "Bonjour";
        } else {
            // TODO Ce qui a à faire si ce n'est pas bon
            echo "Username vide";
        }
    }

    // Vérification de l'email
    private function emailVerify($email): void {
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // TODO ce qui a à faire après la vérification
            echo "Coucou";
        } else {
            // TODO Ce qui a à faire si ce n'est pas bon
            echo "Email vide";
        }
    }

    // Vérification du mot de passe
    private function passwordVerify($password): void {
        if (!empty($password)) {
            // TODO ce qui a à faire après la vérification
            echo "Hey !";
        } else {
            // TODO Ce qui a à faire si ce n'est pas bon
            echo "Mot de pass vide";
        }
    }

    // Vérification de la confirmation de mot de passe
    private function confirmPasswordVerify($password): void {
        if (!empty($password) && $password === $_POST['password']) {
            // TODO ce qui a à faire après la vérification
            echo "Hello !";
        } else {
            // TODO Ce qui a à faire si ce n'est pas bon
            echo "Pas pareil";
        }
    }

    // Affichage du template d'inscription utilisateurs
    public function register(): void {
        if (!empty($_POST['submit'])) {
            $this->usernameVerify($_POST['username']);
            $this->emailVerify($_POST['email']);
            $this->passwordVerify($_POST['password']);
            $this->confirmPasswordVerify(['confirmPassword']);
            if (empty($this->error)) {
                $usersModel = new UsersModel();
                $users = $usersModel->addUser();
            } else {
                // TODO afficher une erreur en async
                echo "oups";
            }
        }
        $template = $this->twig->load('register.html.twig');
        echo $template->render(["users" => $users]);
    }
}