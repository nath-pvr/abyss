<?php


namespace App\Controllers;


class UserLogOutController extends GeneralController
{

    private array $success = array();

    public function __construct() {
        parent::__construct();
    }

    public function logOut(): void {
        setcookie('remember', NULL, -1);
        unset($_SESSION['auth']);
        $this->success['logout'] = 'Vous êtes maintenant déconnecté';
        $_SESSION['flash']['success'] = $this->success;
        header('Location: ' . $this->baseUrl . '/connexion');
    }
}