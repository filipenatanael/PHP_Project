<?php

class testController extends Controller{

  public function index(){
    echo "Testando testController!";
  }

  public function testando(){
    $model_Test = new Test();
    $model_Test->setInfo('Informações releavantes de dados!');

    $dados = array(
      'info' => $model_Test->getInfo()
    );

    $this->loadView('testing', $dados);
  }

}

?>
