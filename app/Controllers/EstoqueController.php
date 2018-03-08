<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class EstoqueController extends BaseController
{

  public function estoque(){

    $this->setPageTitle('Estoque');
    $this->renderView('home/estoque', 'Estoque');

  }
}

 ?>
