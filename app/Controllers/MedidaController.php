<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class MedidaController extends BaseController
{

  public function medida()
  {
    $this->setPageTitle('Medida');
    $this->renderView('home/medida', 'Medida');
  }

}






 ?>
