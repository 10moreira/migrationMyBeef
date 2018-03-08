<?php

//Toda rota válida é importada no arquivo bootstrap
//Instancia a classe de routes
$routes = require_once __DIR__ . "/../app/routes.php";
$route = new \Core\Route($routes);



?>
