<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/survey/resources/db/DB.php';



class view extends DB{


public function viewAll(){
    $pdo = new DB;
    $pdo= $pdo->connect();

    $sql = "SELECT * FROM `survey` ";
    $pdo = $pdo->prepare($sql);
    $pdo->execute();
    $datas= $pdo->fetchAll(PDO::FETCH_OBJ);
    foreach ($datas as $data) {

        echo $data->name;
        echo $data->f1;
        echo $data->f2;
        echo $data->f3;
        echo $data->f4;
        echo $data->f5;

    }
}

}


 ?>
