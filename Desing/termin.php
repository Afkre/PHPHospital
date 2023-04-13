<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Otomation</title>
</head>
<body>
    <table>
        <tr>
            <th>Klinik</th>
            <th>Abteilung</th>
            <th>Arzt</th>
            <th>Stadt</th>
            <th>Date</th>

        </tr>
        <?php
        $terminfragen=$db->prepare("SELECT * FROM termin
        INNER JOIN user ON termin.user_id= user.user_id WHERE user_idenNR=:user_idenNR");
        $terminfragen->execute([
            'user_idenNR' =>$_SESSION['user_idenNR']
        ]); 
        while ($terminkontroll=$terminfragen->fetch(PDO::FETCH_ASSOC)) {?>
            
        
        
        
        <tr>
            <td><?php echo $terminkontroll['termin_klinik'] ?></td>
            <td><?php echo $terminkontroll['termin_abteilung'] ?></td>
            <td><?php echo $terminkontroll['termin_arzt'] ?></td>
            <td><?php echo $terminkontroll['termin_ort'] ?></td>
            <td><?php echo $terminkontroll['termin_date'] ?></td>
        </tr>
        <?php } ?>
    </table>

    
</body>
</html>