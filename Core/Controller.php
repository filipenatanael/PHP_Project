<?php

class Controller{

   public function loadView($viewName, $viewData = array()){
      extract($viewData);
      include_once 'Views/'.$viewName.'.php';
   }

  public function loadTemplate($viewName, $viewData = array()){
    include 'Views/template.php';
  }

  public function loadviewInTemplate($viewName, $viewData = array()){
    extract($viewData);
    include 'Views/'.$viewName.'.php';
  }


}

?>
