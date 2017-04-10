<?php

class Controller{

   public function loadView($viewName, $viewData = array()){
      extract($viewData);
      include_once 'Views/'.$viewName.'.php';
   }

}

?>
