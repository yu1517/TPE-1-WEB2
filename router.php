<?php
require_once 'app/controllers/home.controller.php';
require_once 'app/controllers/book.controller.php';
require_once 'app/controllers/author.controller.php';
require_once 'app/controllers/auth.controller.php';


//defino la base url para la construccion de links con urls semanticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//lee la accion
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action = 'home'; // acción por defecto
}

// parsea la accion Ej: dev/juan --> ['dev', juan] o Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

//instancio el unico controller que existe por ahora



// tabla de ruteo
//determina que camino seguir segun la accion
switch ($params[0]) {
    case 'home':
        $homeController = new HomeController();
        $homeController->showHome();
        break;
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'book':
        $bookController = new BookController();
        $bookController->showBooks();
        break;
    case 'author':
        $authorController = new AuthorController();
        $authorController->showAuthor();
        break;
    /*case 'add':
        $bookController->addBook();
        break;*/
    case 'addBook':
        $bookController = new BookController();
        $bookController->addBook();
        break;
    case 'addAuthor':
        $authorController = new AuthorController();
        $authorController->addAuthor();
        break;
    case 'editBook':
        $id = $params[1];
        $bookController = new BookController();
        $bookController->insertEditBook($id);
        break;
    case 'showEdit':
        $id = $params[1];
        $bookController  = new BookController();
        $bookController ->showEditBook($id);  
        break; 
    case 'showEditAuthor':
        $id = $params[1];
        $authorController = new AuthorController();
        $authorController->showEditAuthor($id);  
        break;
    case 'editAuthor':
        $id = $params[1];
        $authorController = new AuthorController();
        $authorController ->insertEditAuthor($id);  
        break;  
    case 'deleteBook':
        $id = $params[1];
        $bookController = new BookController();
        $bookController->deleteBooks($id);
        break;
    case 'deleteAuthor':
        $id = $params[1];
        $authorController = new AuthorController();
        $authorController->deleteAuthor($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
