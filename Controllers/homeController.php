<?php

class homeController extends Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index(){
    echo "homeController: Index";
  }

  public function ListClients(){
    $customers = new Customer();
    $data['customers'] = $customers->getCustomer();
    $this->loadTemplate('ListClients', $data);
  }

  public function RegisterClients(){
    if(isset($_POST['register'])){
      $name = addslashes($_POST['name']);
      $email = addslashes($_POST['email']);
      $fone = addslashes($_POST['fone']);
      $customer = new Customer();
      $return_function = $customer->cadCustomer($name, $email, $fone);
      echo "Here >>> ".$return_function." > > ".$name; /* Testing only */

    }
    $data = array();
    $this->loadTemplate('RegisterClients', $data);
  }

}

?>
