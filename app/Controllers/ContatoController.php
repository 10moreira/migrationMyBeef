<?php

namespace App\Controllers;

use Core\BaseController;

/**
 *
 */
class ContatoController extends BaseController
{

  public function contato(){

      $this->setPageTitle('Contato');
      $this->renderView('home/contato', 'Contato');

  }


}




 ?>
