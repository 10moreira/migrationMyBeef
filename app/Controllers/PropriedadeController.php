<?php

namespace App\Controllers;

use Core\BaseController;

/**
 *
 */
class PropriedadeController extends BaseController
{

    public function propriedade()
    {
        $this->setPageTitle('Propriedade');
        $this->renderView('home/propriedade', 'Propriedade');
    }
}


?>
