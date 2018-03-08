<?php

namespace App\Controllers;

use Core\BaseController;


/**
 *
 */
class CustosController extends BaseController
{

  public function custos(){

    $this->setPageTitle('Custos');
    $this->renderView('home/custos', 'Custos');


  }




}






 ?>
