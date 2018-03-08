<?php

namespace App\Controllers;

use Core\BaseController;

/**
 *
 */
class RebanhoController extends BaseController
{

public function rebanho()
{
  $this->setPageTitle('Rebanho');
  $this->renderView('home/rebanho', 'Rebanho');
 }

}

?>
