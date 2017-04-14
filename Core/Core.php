<?php

class Core{
   public function run(){
      $params = array();
     //$url = substr($_SERVER['PHP_SELF'],22);
     //$url = '/'.((isset($_GET['q']))?$GET['q']:'');
     //(No .htaccess) RewriteRule ^(.*)$ /PHP_Project/index.php?q=$1 [QSA,L]
     $url = explode("index.php", $_SERVER['PHP_SELF']);
     $url = end($url);
print_r($url);
     if(!empty($url)){
       $url = explode('/',$url);
       array_shift($url);

       $currentController = $url[0].'Controller';
       array_shift($url);
       if(isset($url[0]) && !empty($url[0])){
           $currentAction = $url[0];
           array_shift($url);
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

    if (class_exists($currentController)) {
      $control = new $currentController();
    }else{
      $currentController = 'homeController';
      $control = new $currentController();
    }

    if(!method_exists($control,$currentAction)){
      $currentAction = 'index';
    }

    call_user_func_array(array($control, $currentAction), $params);


     //$control->$currentAction();
     //echo '</br></br>'.'Controller: '.$currentController.'<br>';
     //echo 'Action: '.$currentAction;
   }



}

?>
