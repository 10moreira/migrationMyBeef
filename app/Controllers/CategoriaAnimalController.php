<?php

namespace App\Controllers;


use Core\BaseController;
use GuzzleHttp\Client;

/**
 *
 */
class CategoriaAnimalController extends BaseController
{


  public function categoriaAnimal()
  {
    $this->setPageTitle('CategoriaAnimal');
    $this->renderView('home/categoria_animal', 'CategoriaAnimal');

  }

  public function inseriCategoria()
  {
    $this->setPageTitle('CategoriaAnimal');
    $this->renderView('home/inseri_categoria', 'CategoriaAnimal');

     $client = new Client();

     $request=$client->post('http://localhost:8888/categoria_animal/post',[
        'json'=>[
            'nome'=>'nomecategoria',
        ]
     ]);
     $response = $request->send();

  }



    /*
     $request = $client->post('http://localhost:8888/categoria_animal/post', array(), array(
           'nome' => 'nomecategoria'
     ));
         $response = $request->send();
         */
  public function listaCategoriasanimais()
  {
    $this->setPageTitle('ListaCategorias');
    $this->renderView('home/lista_categoria', 'ListaCategorias');

  }

}









?>
