<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <title>Senarai Pemohon</title>

    <style>

        body{
            font-family: Arial;
            margin: 40px;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 10px;
            text-align: center;
        }

        button{
            padding: 8px 15px;
            cursor: pointer;
        }

        a{
            text-decoration: none;
        }

    </style>

</head>

<body>

<h2>Senarai Peminjam</h2>

<table>

<tr>

    <th>Bilangan</th>
    <th>Nama</th>
    <th>IC</th>
    <th>Phone</th>
    <th>Buku</th>
    <th>Tarikh</th>
    <th>Tarikh Pemulangan</th>
    <th>Tindakan</th>

</tr>

<?php

$data = mysqli_query($conn,
"SELECT * FROM library");

$bil = 1;

while($row = mysqli_fetch_assoc($data)) {

?>

<tr>

    <td><?= $bil++; ?></td>

    <td><?= $row['nama']; ?></td>

    <td><?= $row['ic']; ?></td>

    <td><?= $row['phone']; ?></td>

    <td><?= $row['buku']; ?></td>

    <td><?= $row['tarikh']; ?></td>

    <td>

    <?php

        if($row['tarikh_pulang'] == NULL){

            echo "-";

        }else{

            echo $row['tarikh_pulang'];

        }

    ?>

    </td>

    <td>

        <a href="index.php?id=<?= $row['id']; ?>">
            <button>Kemaskini</button>
        </a>

        <a href="pulang.php?id=<?= $row['id']; ?>">

            <button>Pulang</button>

        </a>

        <a href="delete.php?id=<?= $row['id']; ?>">

            <button onclick="return confirm('Padam data ini?')">
                Padam
            </button>
        </a>
    </td>

</tr>

<?php } ?>

</table>

<br><br><br>

<a href="index.php">
    <button>Kembali</button>
</a>

</body>
</html>
