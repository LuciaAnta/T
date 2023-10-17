<?php

// TABLA DE ROUTING
// ACCIÓN;
// Home          ->     inscripController->verInscriptos();
// agregar       ->     inscripController->agregarInscripto();
// eliminar/:ID  ->     inscripController->eliminarInscripto($id); 
// finalizar/:ID ->     inscripController->finalizarInscripto($id);
// history       ->     historyController->history();
// login         ->     authContoller->login();
// autenti       ->     authContoller->auth(); 
// logout        ->     authContoller->logout();

// Importacion de archivos de los controladores
require_once "config.php";
require_once 'app/controllers/inscrip.controller.php';
require_once 'app/controllers/history.controller.php';
require_once 'app/controllers/auth.Controller.php';


// Lectura de acción del usuario
$action = 'Home'; // accion por defecto

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

//Analiza la accion para separar accion real de parametros (string parsing) y se almacena en arreglos.
$params = explode('/', $action);

//Determinacion de camino a seguir
switch ($params[0]) {
    case 'Home':
        $controller = new inscripController();
        $controller->verInscripto();
        break;
    case 'agregar':
        $controller = new inscripController();
        $controller->agregarInscripto();
        break;
    case 'eliminar':
        $controller = new inscripController();
        $controller->removerInscripto($params[1]);
        break;
    case 'finalizar':
        $controller = new inscripController();
        $controller->editarInscripto($params[1]);
        break;
    case 'history':
        $controller = new historyController();
        $controller->history();
        break;
    case 'login':
        $controller = new authController();
        $controller->login();
        /*RECORDATORIO PARA CLAVE ENCRIPTADA; echo password_hash('asd123', PASSWORD_BCRYPT);  */
        break;
    case 'autenti':
        $controller = new authController();
        $controller->auth();
        break;
    case 'logout':
        $controller = new authController();
        $controller->logout();
        break;
    default:
        echo "404 Page Not Found";
        break;
}
