<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class ReceitaController extends BaseController{

  public function receita(){

      $this->setPageTitle('Receita');
      $this->renderView('home/receita', 'Receita');

  }

}


 ?>
