<?php

// Carregando classes via Composer 

use App\Controllers\CursoController;
use App\Controllers\HomeController;

require(__DIR__ . '/vendor/autoload.php');

include_once(__DIR__ . '/views/layout/_header.php');

$pagina = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "home";

switch ($pagina) {
    case 'home':
        HomeController::home();
        break;

    case 'listarCursos':
        $curso = new CursoController;
        $curso -> listar();
        break;
    default:
        echo "<h3> A página procurada não existe - erro 404.</h3>";
        break;
}

include_once(__DIR__ . '/views/layout/_footer.php');
