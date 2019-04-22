<?php
  if(isset($_POST['hitung'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $tinggi = $_POST['tinggi'];
        $volume = $panjang * $lebar * $tinggi;
          echo "Volume Balok adalah ". $volume;
  }
 ?>
