<?php

class homeController extends Controller{
  public function __construct() {
    parent::__construct();
  }

  public function index(){
    $usu = new Usuario();
    $usu->setName('Demolidor');

    $dados = array(
      'name' => $usu->getName()
    );
    $this->loadTemplate('home', $dados);

  }

  public function ListClients(){
    $clientes = new Clientes();
    $dados['clientes'] = $clientes->getClientes();
    $this->loadTemplate('ListClients', $dados);
  }

  public function RegisterClients(){
    if(isset($_POST['cadastre'])){
      $name = addslashes($_POST['name']);
      $email = addslashes($_POST['email']);
      $fone = addslashes($_POST['fone']);
      $cliente = new Clientes();
      $retorno = $cliente->cadCliente($name, $email, $fone);
      echo "Aqui>>> ".$retorno." > > ".$name;

    }
    //echo "<script>alert('TESTE');</script>";
    $dados = array();
    $this->loadTemplate('RegisterClients', $dados);
  }

}

?>
