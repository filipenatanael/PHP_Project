<?php

class Test{
   private $nome;
   private $mail;
   private $info;


   public function setNome($nome){
     $this->nome = $nome;
   }

   public function getNome(){
     return $this->nome;
   }

   public function setEmail($mail){
     $this->email = $email;
   }

   public function getEmail($email){
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
