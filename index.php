<?php
sql_autoload_register(function ($class){
  //string position
  //recebendo exemplo: homeController
  if(strpos($class,'Controller') > -1){
    if(file_exists('Controllers/'.$class.'.php')){
      requere_once('Controllers/'.$class.'.php');
    }
  }
});

?>
