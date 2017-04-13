<?php
require 'environment.php';

global $config;

$config = array();

if(ENVIRONMENT == "development"){
  $config['dbname'] = 'MVC';
  $config['hostname'] = 'localhost';
  $config['username'] = 'root'
  $config['pasword'] = '';
}else{
  $config['dbname'] = '###';
  $config['hostname'] = '###';
  $config['username'] = '###'
  $config['pasword'] = '###';
}

?>
