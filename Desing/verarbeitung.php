<?php

ob_start();
session_start();
include 'connect.php';


if(isset($_POST['user_register'])){
   // echo 'erfolgreich';
   $user_idenNR = isset($_POST['user_idenNR'])? $_POST['user_idenNR']: null;
   $user_name = isset($_POST['user_name'])? $_POST['user_name']: null;
   $user_password = isset($_POST['user_password'])? $_POST['user_password']: null;

   //Prozess der Hinzufügung einer Datenbank
   $abfrage = $db->prepare("INSERT INTO user SET
        user_idenNR = ?,
        user_name = ?,
        user_password = ?
   ");
   $hinzufügen = $abfrage->execute([
    $user_idenNR, $user_name, $user_password
   ]);
   if($hinzufügen){
    header('location:index.php?situation=erfolgreich');
   }else {
    $fehler = $abfrage->errorInfo();
    echo 'mysql-Fehler' .$fehler[2];
   }
}
if (isset($_POST['login'])) {
    // echo 'der richtige Platz'; //für Kontrolle
    $user_idenNR = $_POST['user_idenNR'];
    $user_password = $_POST['user_password'];

    $userfragen = $db->prepare("SELECT * FROM user WHERE user_idenNR=:user_idenNR AND user_password=:user_password");
    $userfragen->execute([
        'user_idenNR'=> $user_idenNR,
        'user_password'=> $user_password
    ]);
    $anzahl = $userfragen->rowCount();
    if($anzahl==1){
        $_SESSION['user_idenNR']=$user_idenNR;
        header('location:homepage.php?situation=erfolgreich');
        exit;
    } else {
        header('location:index.php?situation=erfolglose');
        exit;
    }
}

?>