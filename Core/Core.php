<?php

class Core{
    //private $currentController;
   //private $currentAction;

   public function run(){
      $params = array();
     //$url = substr($_SERVER['PHP_SELF'],22);
     $url = explode("index.php", $_SERVER['PHP_SELF']);
     print_r($url);
     $url = end($url);

     if(!empty($url)){
       $url = explode('/',$url);
       array_shift($url);

       $currentController = $url[0].'Controller';
       array_shift($url);
       if(isset($url[0])){
           $currentAction = $url[0];
           array_shift($url);
           print_r($url);
       }else{
           $currentAction = 'index';
       }

       if(count($url) > 0){
         //$params = array();
         $params = $url;
       }

     }else {
        $currentController = 'homeController';
        $currentAction = 'index';
     }
     //---------------------------------------------
     require_once 'Core/Controller.php';
     $control = new $currentController();
      call_user_func_array(array($control, $currentAction), $params);


     //$control->$currentAction();
     echo '</br></br>'.'Controller: '.$currentController.'<br>';
     echo 'Action: '.$currentAction;
   }



}

?>
