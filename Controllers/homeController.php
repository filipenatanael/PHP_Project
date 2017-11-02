<?php

class homeController extends Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index(){
    echo "homeController: Index";
  }

  public function ListCustomers(){
    $customers = new Customer();
    $data['customers'] = $customers->getCustomer();
    $this->loadTemplate('ListCustomers', $data);
  }

  public function RegisterCustomers(){
    if(isset($_POST['register'])){
      $name = addslashes($_POST['name']);
      $email = addslashes($_POST['email']);
      $customer = new Customer();
      $customer->setCustomer($name, $email);
    }
    $data = array();
    $this->loadTemplate('RegisterCustomers', $data);
  }

}

?>
