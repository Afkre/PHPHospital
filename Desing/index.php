<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="style.css  ">

    <title>Hospital Otomation</title>
</head>
<body>
    <header>

    <h2>Hospital Otomation</h2>
    </header>
    <div class="tableOuter">
        <h1>Login</h1>
        <form action="verarbeitung.php" method="post">
            <div class="user">
                <input type="text" name="user_idenNR" placeholder="Identifikation Number">
            </div>
            <div class="pass">
                <input type="password" name="user_password" placeholder="Password">
            </div>
            <button type="submit"  class= "sub" id="login" name="login">Login</button>
            <br>
        </form>
        <a href="mitglied.php"><button type="submit" class="sub" id="mitglied">Register</button></a>
    </div>
    
</body>
</html>