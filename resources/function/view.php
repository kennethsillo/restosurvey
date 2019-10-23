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
    echo '<table class="table table-hover text-dark mx-auto mt-sm-5 text-center table-bordered  " style="width:80%;">';
            echo '<thead class="thead-dark">';
            echo '<th>Name</th> <th>Feedback #1</th> <th>Feedback #2</th><th>Feedback #3</th><th>Feedback #4</th><th>Feedback #5</th>';
            echo '</thead>';
    foreach ($datas as $data) {
            echo '<tr>';
            echo  '<td>'.$data->name.'</td>';
            echo  '<td>'.$data->f1.'</td>';
            echo  '<td>'.$data->f2.'</td>';
            echo  '<td>'.$data->f3.'</td>';
            echo  '<td>'.$data->f4.'</td>';
            echo  '<td>'.$data->f5.'</td>';
            echo '</tr>';
    }
    echo '<table>';
}


}
 ?>
<html>
<header>
  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
        <a class="navbar-brand mx-md-n5" href="#"><IMG SRC="resources/img/logo2.png" ALT="Logo" WIDTH=60 HEIGHT=60></a>
          <h1 class="mx-auto">REPORT TABLE</h1>
    </div>
  </nav>
</header>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</html>
