<?php

class DB{

  public $host = 'localhost';
  public $dbname = 'restosurvey';
  public $user = 'root';
  public $password = '';
  public $pdo = null;


public function connect(){
  try {
    $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
  } catch(PDOexception $e) {
    die($e->getMessage());
  }
  return $this->pdo;
}
}
?>
