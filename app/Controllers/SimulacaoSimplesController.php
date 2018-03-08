<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class SimulacaoSimplesController extends BaseController{

  public function simulacaoSimples(){

     $this->setPageTitle('SimulacaoSimples');
     $this->renderView('home/simulacaoSimples', 'SimulacaoSimples');

  }
}




 ?>
