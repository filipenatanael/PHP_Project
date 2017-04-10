<?php

class Core{

   //private $currentController;
   //private $currentAction;

   public function run(){
     $url = substr($_SERVER['PHP_SELF'],22);

     if(!empty($url)){
       $url = explode('/',$url);
       array_shift($url);
       $currentController = $url[0].'Controller';

       if(isset($url[1])){
       $currentAction = $url[1];
       }else{
       $currentAction = 'index';
       }
     }else {
       $currentController = 'homeController';
       $currentAction = 'index';
     }
     //---------------------------------------------
     require_once 'Core/Controller.php';
     $control = new $currentController();
     $control->$currentAction();

     echo '</br></br>'.'Controller: '.$currentController.'<br>';
     echo 'Action: '.$currentAction;

   }



}

?>
