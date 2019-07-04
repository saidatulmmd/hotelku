<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';

$hotel_id = $_GET['id'];
$action = $_GET['action'];

if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT qty FROM hotel WHERE id = ".$hotel_id);

if($result){

  if($obj = $result->fetch_object()) {
    switch($action) {
      case "add":
      if($_SESSION['cart'][$hotel_id]+1 <= $obj->qty)
        $_SESSION['cart'][$hotel_id]++;
      break;
      case "remove":
      $_SESSION['cart'][$hotel_id]--;
      if($_SESSION['cart'][$hotel_id] == 0)
        unset($_SESSION['cart'][$hotel_id]);
        break;
    }
  }
}
header("location:cart.php");
?>