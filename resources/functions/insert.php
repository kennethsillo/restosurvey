<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/survey/resources/db/DB.php';

class insert extends DB{
  public $name;
  public $rb1;
  public $rb2;
  public $rb3;
  public $rb4;
  public $rb5;

  function __construct($name=null,$rb1=null,$rb2=null,$rb3=null,$rb4=null,$rb5=null){
      $this->name = $name;
      $this->rb1 = $rb1;
      $this->rb2 = $rb2;
      $this->rb3 = $rb3;
      $this->rb4 = $rb4;
      $this->rb5 = $rb5;
  }

public function insertData(){
  if(isset($_POST['submit'])){
    $pdo = new DB;
    $pdo = $pdo->connect();
    $name  =  $this->name;
    $rb1 =  $this->rb1;
    $rb2 =  $this->rb2;
    $rb3 =  $this->rb3;
    $rb4 =  $this->rb4;
    $rb5 =  $this->rb5;


  $sql = "INSERT INTO `survey`(`name`, `f1`, `f2`, `f3`, `f4`, `f5`) VALUES (?,?,?,?,?,?)";
  $pdo = $pdo->prepare($sql);
  $pdo->execute([$name,$rb1,$rb2,$rb3,$rb4,$rb5]);
}
}
}
 ?>
