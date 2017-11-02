<?php

class Customer extends Model{

  public function getCustomer(){
    $array = array();
    $sql = "SELECT * FROM tbl_Customers";
    $sql = $this->db->query($sql);
    if($sql->rowCount() > 0){
      $array = $sql->fetchAll();
    }
    return $array;
  }

  public function setCustomer($name, $email, $fone){
    $sql = "INSERT INTO tbl_Customers SET name ='$name', email='$email'";
    $this->db->query($sql);
    $id = $this->db->lastInsertId();
    return $id;
  }
}

?>
