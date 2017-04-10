<?php

class Controller{

   public function loadView($viewName, $viewData = array()){
      include_once 'Views/'.$viewName.'.php';
   }

}

?>
