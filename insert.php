<?php

include 'db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$ic = $_POST['ic'];
$phone = $_POST['phone'];
$buku = $_POST['buku'];
$tarikh = $_POST['tarikh'];
$jantina = $_POST['jantina'];

if($id == ""){

    mysqli_query($conn,"INSERT INTO library (nama, ic, phone, buku, tarikh, jantina) VALUES ('$nama','$ic','$phone','$buku','$tarikh','$jantina')");

}else{

    mysqli_query($conn,"UPDATE library SET nama='$nama',ic='$ic',phone='$phone',buku='$buku',tarikh='$tarikh',jantina='$jantina'WHERE id='$id'");

}

header("Location:senarai.php");

?>