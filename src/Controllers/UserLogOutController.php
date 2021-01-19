<?php


namespace App\Controllers;


class UserLogOutController extends GeneralController
{

    public function __construct() {
        parent::__construct();
    }

    public function logOut(): void {
        setcookie('remeber', NULL, -1);
        unset($_SESSION['auth']);
        $_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté';
        header('Location: ' . $this->baseUrl . '/connexion');
    }

}