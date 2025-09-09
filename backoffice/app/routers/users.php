?php

use \App\Controllers\UsersController;

include once '../app/controllers/usersController.php';

switch ($_GET['users']):
    default:
        UsersController\loginFormAction();
        break;
endswitch;