<?php
require 'environment.php';

define("DEFAULT_URL", "http://localhost:1234/PHP_project");
global $config;

$config = array();
if(ENVIRONMENT == "development"){
  $config['dbname'] = 'MVC';
  $config['hostname'] = 'localhost:3306';
  $config['username'] = 'root';
  $config['password'] = '';
}else{
  $config['dbname'] = '###';
  $config['hostname'] = '###';
  $config['username'] = '###';
  $config['password'] = '###';
}

?>
