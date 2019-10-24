<?php

include_once "dbh.inc.php";


$racunarid = $_POST['racunar'];
$prioritetkvara = $_POST['prioritet'];
$opiskvara = $_POST['opis'];


$sql = "INSERT INTO prijava (racunar_id, prioritet_kvara, opis_kvara) VALUES ('$racunarid', '$prioritetkvara', '$opiskvara?');";
mysqli_query($conn, $sql);


header("Location:../prijavikvar.php?submit=success");
