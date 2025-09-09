<?php


// route par defaut:
// PATTERN: /
// CTRL: postsController
// ACTION: dashboard

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($conn);