<?php

//Toda rota criada deve ser passada nessa classe de route.
//Seta cada rota encaminhando para cada controler responsável o que deve ser feito.
$route[] = ['/', 'HomeController@index'];
$route[] = ['/posts', 'PostsController@index'];
$route[] = ['/posts/{id}/show', 'PostsController@show'];

$route[] = ['/login', 'LoginController@login'];
$route[] = ['/contato', 'ContatoController@contato'];
$route[] = ['/custos', 'CustosController@custos'];
$route[] = ['/estoque', 'EstoqueController@estoque'];
$route[] = ['/receita', 'ReceitaController@receita'];
$route[] = ['/propriedade', 'PropriedadeController@propriedade'];
$route[] = ['/rebanho', 'RebanhoController@rebanho'];
$route[] = ['/medida', 'MedidaController@medida'];
$route[] = ['/novoaqui', 'NovoaquiController@novoaqui'];

$route[] = ['/categoria_animal', 'CategoriaAnimalController@categoriaAnimal'];
$route[] = ['/lista_categoria', 'CategoriaAnimalController@listaCategoriasanimais'];
$route[] = ['/inseri_categoria', 'CategoriaAnimalController@inseriCategoria'];



$route[] = ['/simulacaointensificacao', 'SimulacaoIntensificacaoController@simulacaoIntensificacao'];
$route[] = ['/simulacaoSimples', 'SimulacaoSimplesController@simulacaoSimples'];
$route[] = ['/graficossimulacaosimples', 'GraficosSimulacaosimplesController@graficossimulacaoSimples'];

return $route;







 ?>
