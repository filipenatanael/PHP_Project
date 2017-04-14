<?php

class homeController extends Controller{

  public function index(){
      $usu = new Usuario();
      $usu->setName('Demolidor');

      $dados = array(
        'name' => $usu->getName()
      );
      $this->loadTemplate('home', $dados);

  }

  public  function ListClients(){
    $clientes = new Clientes();
    $dados['clientes'] = $clientes->getClientes();
    $this->loadTemplate('testing', $dados);
  }

  public  function RegisterClients(){

    $dados = array();
    $this->loadTemplate('register', $dados);
  }

}

?>
