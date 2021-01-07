<?php


namespace App\Controllers;


use App\Models\UsersModel;

class UsersController extends GeneralController {

    private array $errors = array();

    public function __construct() {
        parent::__construct();
    }

    // Vérification du pseudo
    private function usernameVerify($username): void {
        if (empty($username) || !preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            $errors['username'] = "Votre pseudo n'est pas valide";
        } else {
            $usersModel = new UsersModel();
            $users = $usersModel->allUsersByPseudo();
            if ($users) {
                $errors['username'] = "Ce pseudo est déjà pris";
            }
        }
    }

    // Vérification de l'email
    private function emailVerify($email): void {
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Votre email n'est pas un email valide";
        } else {
            $users = new UsersModel();
            $users->allUsersByEmail();
            if ($users) {
                $errors['email'] = "Cet email est déjà utilisé par un autre utilisateur";
            }
        }
    }

    // Vérification du mot de passe
    private function passwordVerify($password): void {
        if (empty($password)) {
            $errors['password'] = "Vous devez rentrer un mot de passe valide";
        }
    }

    // Vérification de la confirmation de mot de passe
    private function confirmPasswordVerify($password): void {
        if (empty($password) || $password !== $_POST['password']) {
            $errors['confirmPassword'] = "Vos mots de passe ne sont pas identiques";
        }
    }

    // Affichage du template d'inscription utilisateurs
    public function register(): void {
        if (!empty($_POST['submit'])) {
            $this->usernameVerify($_POST['username']);
            $this->emailVerify($_POST['email']);
            $this->passwordVerify($_POST['password']);
            $this->confirmPasswordVerify(['confirmPassword']);
            if (empty($this->errors)) {
                $usersModel = new UsersModel();
                $users = $usersModel->addUser();
            }
        }
        $template = $this->twig->load('register.html.twig');
        echo $template->render(["users" => $users]);
    }
}