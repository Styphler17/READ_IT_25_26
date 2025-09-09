<?php

// routes des users
if (isset($_GET['users'])):
    include_once '../app/routers/users.php';

// route par defaut:
// PATTERN: /
// CTRL: postsController
// ACTION: dashboard

else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($conn);
endif;