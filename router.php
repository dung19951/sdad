<?php

require __DIR__ . '/vendor/autoload.php';
use App\Mid\Mid;
session_start();
ob_start();
$mid= new Mid();
$mid->isLogin();
use App\Controller;
$conn = new \App\Model\DBConnect();
$controller = new Controller\BookController();
$userController= new Controller\UserController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'create-book':
        $controller->createBook();
        break;
    case 'update-book':
        $controller->editBook();
        break;
    case 'delete-book':
        $controller->deleteBook();
        break;
    case 'logout':
        $userController->logOut();
        break;
    case 'tim':
        $controller->search();
        break;
    default:
        $controller->showAllBooks();
        break;
}
;?>
