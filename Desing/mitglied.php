<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="style.css  ">

    <title>Klinik Otomation</title>
</head>
<body>
    <header>

    <h2>Klinik Otomation</h2>
    </header>
    <div class="tableOuter">
        <h1>Register</h1>
        <form action="verarbeitung.php" method="post">
        <div class="user">
                <input type="text" name="name" placeholder="Vorname Nachname">
            </div>
            <div class="user">
                <input type="text" name="IdenNR" placeholder="Identifikation Number">
            </div>
            <div class="pass">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit"  class= "sub" id="login">Register</button>
            <br>
        </form>
        <a href="index.php"><button type="submit" class="sub" id="mitglied">Zurück</button></a>
    </div>
    
</body>
</html>