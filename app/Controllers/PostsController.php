<?php

namespace App\Controllers;

use App\Models\Post;
use Core\BaseController;
use Core\Container;
use Core\DataBase;

/**
 *
 */
class PostsController extends BaseController
{

  public function index(){
    $this->setPageTitle('Posts');
    $model = Container::getModel("Post");
    $this->view->posts = $model->All();
    $this->renderView('posts/index', 'layout');

  }

  public function show($id, $request){
    echo $id . '<br>' ;
    echo $request->get->nome . '<br>';
    echo $request->get->sexo . '<br>';

  }

}
?>
