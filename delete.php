<?php

include 'db.php';

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM library WHERE id='$id'");

header("Location:senarai.php");

?>