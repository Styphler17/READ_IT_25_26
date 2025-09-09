<?php

namespace App\Controllers\UsersController;

use \PDO;

function logoutAction(PDO $conn)
{
    // on tue la $_SESSION['user']
    // On redirige vers le formulaire de connexion
    unset($_SESSION['user']);
    header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
}