<?php

ob_start();
session_start();
include 'connect.php';

$userfragen=$db->prepare("SELECT * FROM user WHERE user_idenNR=:user_idenNR");
$userfragen->execute([
    'user_idenNR' =>$_SESSION['user_idenNR']
]);
$anzahl=$userfragen->rowCount();
$userkontroll=$userfragen->fetch(PDO::FETCH_ASSOC);

if ($anzahl==0) {
    header("location:index.php?situation=unerlaubte");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Klinik Otomation</title>

</head>
<body>
    <div class="oben_bar">
        <a href="homepage.php"><h1>Klinik Otomation</h1></a>
        <div class="menu">
            <a href="konto.php"><h5>Konto Daten</h5></a>
            <a href="termin.php"><h5>Termin Daten</h5></a>
        </div>

    </div>
    <a href="logout.php"><div class="logout">
        Logout
    </div></a>
</body>
</html>