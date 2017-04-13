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

}

?>
