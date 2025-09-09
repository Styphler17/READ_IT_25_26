?php

use \App\Controllers\UsersController;

include once '../app/controllers/usersController.php';

switch ($_GET['users']):
    case 'logout':
        UsersController\logoutAction();
        break;
endswitch;