<?php

class Model{
  protected $db;

  public function __construct(){
    global $config;
    $this->db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['hostname'], $config['username'], $config['password']);
  }
}

?>
