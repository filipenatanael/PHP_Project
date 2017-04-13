<?php

class homeController extends Controller{

  public function index(){
      $usu = new Usuario();
      $usu->setName('Demolidor');

      $dados = array(
        'name' => $usu->getName()
      );
      //$this->loadView('home', $dados);
      $this->loadTemplate('home', $dados);

  }


}

?>
