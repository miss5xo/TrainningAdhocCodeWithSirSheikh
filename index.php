<?php

include 'db.php';

$id = "";
$nama = "";
$ic = "";
$phone = "";
$buku = "";
$tarikh = "";
$jantina = "";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $data = mysqli_fetch_assoc(
        mysqli_query($conn,
        "SELECT * FROM library WHERE id='$id'")
    );

    $nama = $data['nama'];
    $ic = $data['ic'];
    $phone = $data['phone'];
    $buku = $data['buku'];
    $tarikh = $data['tarikh'];
    $jantina = $data['jantina'];
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Form Peminjaman</title>

    <style>

        body{
            font-family: Arial;
            margin: 40px;
        }

        input{
            width: 300px;
            padding: 8px;
            margin-bottom: 10px;
        }

        button{
            padding: 10px 20px;
        }

    </style>

</head>

<body>

<h2>Form Peminjaman Buku</h2>

<form action="insert.php" method="POST">

    <input type="hidden"name="id"value="<?= $id; ?>">

    Nama:
    <br>
    <input type="text"name="nama"value="<?= $nama; ?>"required>

    <br>

    IC:
    <br>
    <input type="text"name="ic"value="<?= $ic; ?>"required>

    <br>

    Phone:
    <br>
    <input type="text"name="phone"value="<?= $phone; ?>"required>

    <br>

    Buku:
    <br>
    <input type="text"name="buku"value="<?= $buku; ?>"required>

    <br>

    Tarikh:
    <br>
    <input type="date"name="tarikh"value="<?= $tarikh; ?>"required>

    <br><br>

    Jantina:
    <input type="radio"name="jantina"value="Lelaki"<?= ($jantina=="Lelaki") ? "checked" : ""; ?>required> Lelaki

    <input type="radio"name="jantina"value="Perempuan"<?= ($jantina=="Perempuan") ? "checked" : ""; ?>>Perempuan

    <br><br>

    <button type="submit">Submit</button>

</form>

<a href="senarai.php">
    <button>Senarai</button>
</a>


</body>
</html>