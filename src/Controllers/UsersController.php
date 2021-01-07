<?php


namespace App\Controllers;


use App\Models\UsersModel;
use Config\Config;

class UsersController extends GeneralController {

    private array $errors = array();

    public function __construct() {
        parent::__construct();
    }

    // Vérification du pseudo
    private function usernameVerify($username): void {
        if (empty($username) || !preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            $this->errors['username'] = "Votre pseudo n'est pas valide";
        } else {
            $usersModel = new UsersModel();
            $users = $usersModel->allUsersByPseudo();
            if ($users) {
                $this->errors['username'] = "Ce pseudo est déjà pris";
            }
        }
    }

    // Vérification de l'email
    private function emailVerify($email): void {
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Votre email n'est pas un email valide";
        } else {
            $users = new UsersModel();
            if ($users->allUsersByEmail()) {
                $this->errors['email'] = "Cet email est déjà utilisé par un autre utilisateur";
            }
        }
    }

    // Vérification du mot de passe
    private function passwordVerify($password): void {
        if (empty($password)) {
            $this->errors['password'] = "Vous devez rentrer un mot de passe valide";
        }
    }

    // Vérification de la confirmation de mot de passe
    private function confirmPasswordVerify($password): void {
        if (empty($password) || $password !== $_POST['password']) {
            $this->errors['confirmPassword'] = "Vos mots de passe ne sont pas identiques";
        }
    }

    // Affichage du template d'inscription utilisateurs
    public function register(): void {
        $this->errors =  array();
        if (!empty($_POST['submit'])) {
            $this->usernameVerify($_POST['username']);
            $this->emailVerify($_POST['email']);
            $this->passwordVerify($_POST['password']);
            $this->confirmPasswordVerify($_POST['confirmPassword']);
            if (empty($this->errors)) {
                $usersModel = new UsersModel();
                $users = $usersModel->addUser();
                $_SESSION['username'] = $_POST['username'];
                header("Location: " . Config::getBasePath());
            }
        }
        $template = $this->twig->load('inscription.html.twig');
        echo $template->render(["errors" => $this->errors]);
    }
}