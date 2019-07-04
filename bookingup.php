<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $hotel_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM hotel WHERE id = ".$hotel_id);
        

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->harga * $quantity;
        
        $name=$_POST['name'];
        $noktp=$_POST['noktp'];
        $nohp=$_POST['nohp'];
        $tanggalcin=$_POST['tanggalcin'];
        $tanggalco=$_POST['tanggalco'];
        $query = $mysqli->query("INSERT INTO booking SET code='$obj->code', nama='$obj->nama', deskripsi='$obj->deskripsi', harga=$obj->harga, unit='$quantity', total='$cost', tanggalcin='$tanggalcin', tanggalco='$tanggalco', name='$name', noktp='$noktp', nohp='$nohp'");

        if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE hotel SET qty = ".$newqty." WHERE id = ".$hotel_id)){

          }
        }
      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");

?>
