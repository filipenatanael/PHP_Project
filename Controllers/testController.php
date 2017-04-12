<?php

class testController extends Controller{

  public function index(){
    echo "Testando testController!";
  }

  public function testando(){
    $model_Test = new Test();

    $model_Test->setNome('Naruto');
    $model_Test->setEmail('Naruto@testando.com');
    $model_Test->setInfo('Informações releavantes de dados!');

    $dados = array(
      'info' => $model_Test->getInfo(),
      'nome' => $model_Test->getNome(),
      'email' => $model_Test->getEmail()
    );

    $this->loadView('testing', $dados);
  }

}

?>
