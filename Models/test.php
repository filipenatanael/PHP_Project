<?php

class Test{
   private $nome;
   private $email;
   private $info;


   public function setNome($nome){
     $this->nome = $nome;
   }

   public function getNome(){
     return $this->nome;
   }

   public function setEmail($email){
     $this->email = $email;
   }

   public function getEmail(){
     return $this->email;
   }

   public function setInfo($i){
     $this->info = $i;
   }

   public function getInfo(){
     return $this->info;
   }



}

?>
