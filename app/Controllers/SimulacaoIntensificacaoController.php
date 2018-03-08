<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class SimulacaoIntensificacaoController extends BaseController{


public function simulacaoIntensificacao(){

  $this->setPageTitle('SimulacaoIntensificacao');
  $this->renderView('home/simulacaoIntensificacao', 'SimulacaoIntensificacao');


  }

}




 ?>
