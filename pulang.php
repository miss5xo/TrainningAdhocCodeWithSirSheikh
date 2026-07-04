<?php

include 'db.php';

$id = $_GET['id'];

$today = date("Y-m-d");

mysqli_query($conn,"UPDATE library SET tarikh_pulang='$today' WHERE id='$id'");

header("Location:senarai.php");

?>