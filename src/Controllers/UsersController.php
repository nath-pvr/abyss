<?php

namespace App\Controllers;

use App\Models\UsersModel;
use Config\Config;

class UsersController extends GeneralController {

    private array $errors = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function connexion(){
        $template =$this->twig->load('connexion.html.twig');
        echo $template->render();
    }

    public function userExist() {
        $email = htmlspecialchars($_POST['email']);
        if (empty($email)){
            $this->errors['username'] = "Votre email ou pseudo n'existe pas, merci de vous enregistrer";
            $template =$this->twig->load('inscription.html.twig');
            echo $template->render(["errors"=> $this->errors]);
        } else {
            $usersModel = new UsersModel();
            $user = $usersModel->userSelected($email);
            if($user) {
              return $this->connect($user);
            }
        }
    }

    

    public function connect($user): void{
    
        $this->errors = array();
        if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])){
            $usersModel = new UsersModel();
            $usersModel->userSelected($_POST['email']);
            if (empty($this->errors)) {
                $usersModel = new UsersModel();
                $users = $usersModel->userSelected($_POST['username'], $_POST['email']);
                $_SESSION['username'] = $_POST['username'];
                header("Location: " . Config::getBasePath());
            }

            if ($user){
                // génération de la clé de connection persistante.
                if (password_verify($_POST['password'], $user->password)){
                    $_SESSION['auth'] = $user;
                    $_SESSION['flash']['success'] = 'vous êtes maintenant connecté';
                    if ($_POST['remember']){
                    $user->userConnectedToken();
                    }
                }
            }else{
            $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
            }
        $template = $this->twig->load('index.html.twig');
        echo $template->render(["errors"=>$this->errors]);
        }
    }
}