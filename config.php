<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == "development"){
  $config['dbname'] = 'MVC';
  $config['hostname'] = 'localhost';
  $config['username'] = 'root'
  $config['pasword'] = '';
}

?>
