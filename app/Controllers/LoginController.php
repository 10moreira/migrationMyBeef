<?php

namespace App\Controllers;

use Core\BaseController;

/**
 *
 */
class LoginController extends BaseController
{

  public function login(){

    $this->setPageTitle('Login');
    $this->renderView('home/Login', 'Login');

  }

  public function show($id, $request){
    echo $id . '<br>' ;
    echo $request->get->nome . '<br>';
    echo $request->get->sexo . '<br>';

  }

}
?>
