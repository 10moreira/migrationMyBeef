<?php

namespace App\Controllers;

use Core\BaseController;

/**
 *
 */
class GraficosSimulacaosimplesController extends BaseController
{

  public function graficossimulacaoSimples(){

    $this->setPageTitle('GraficosSimulacaosimples');
    $this->renderView('home/graficossimulacaosimples', 'GraficosSimulacaosimples');

  }
}












 ?>
