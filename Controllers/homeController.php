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
    $this->loadTemplate('testing', $dados);
  }

  public function RegisterClients(){
    if(isset($_POST['cadastre'])){
      $name = $_POST["name"];
      //$name = $name." da Silva";
      echo "</br>".$name;
    }



    //echo "<script>alert('fgdfg');</script>";


    $dados = array();
    $this->loadTemplate('RegisterClients', $dados);
  }

}

?>
