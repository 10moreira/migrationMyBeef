<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class NovoaquiController extends BaseController
{

  public function novoaqui()
  {
   $this->setPageTitle('Novoaqui');
   $this->renderView('home/novoaqui', 'Novoaqui');
  }

}


?>
