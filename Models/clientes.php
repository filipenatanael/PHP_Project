<?php
class Clientes extends Model{

   public function getClientes(){
   $array = array();
   $sqlCommand = "SELECT * FROM cad_cliente";
   $sqlCommand = $this->db->query($sqlCommand);
   if($sqlCommand->rowCount() > 0){
     $array = $sqlCommand->fetchAll();
   }
   return $array;
   }


   public function cadCliente($name, $email, $fone){
     //I'm not checking this is a simple exemple
     $sqlCommand = "INSERT INTO cad_cliente SET name = '$name', email = '$email', fone_number = '$fone'";
     $this->db->query($sqlCommand);
     $id = $this->db->lastInsertId();
     return $id;
   }
}

?>
