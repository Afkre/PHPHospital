<?php include 'header.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Otomation</title>
</head>
<body>
    <div class="konto_content">
        <div class="label">
            <label>Vorname Nachname</label>
            <input type="text" placeholder=<?php echo $userkontroll['user_name']?>>
        </div><br>
        <!--
        <div class="label">
            <label>Nachname</label>
            <input type="text">
        </div><br>-->
        <div class="label">
            <label>Identifikation No </label>
            <input type="text" placeholder=<?php echo $userkontroll['user_idenNR']?>>
        </div><br>
        <!--
            <div class="label">
            <label>Telefon</label>
            <input type="text">
        </div><br>
        <div class="label">
            <label>E-Mail</label>
            <input type="text">
        </div><br>
        <button type="submit"> Update</button>
        -->
    </div>
    
</body>
</html>