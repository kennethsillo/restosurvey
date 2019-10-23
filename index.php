<?php
// require_once "person.php";
// $tao = new person('roy');
//
// $tao->shout();

// require_once "vehicle.php";
//
// $tricycle = new vehicles(20);
// $truck = new vehicles(40);
// $sportscar = new vehicles(120);
//
// $tricycle->drive();
// $truck->drive();
// $sportscar->drive();

require_once 'view.php';
require_once 'Delete.php';
require_once 'insert.php';
require_once 'update.php';
$view = new view("","NYC");
$view->ViewbyCity();

$delete = new Delete(145);
$delete->deleteAcc();

$insert = new insert('trial');
$insert->insertAcc();

$update = new update('acc1',2);
$update->updateAcc();




?>
