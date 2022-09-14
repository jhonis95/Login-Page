<?php
    //iniciando sessão
    session_start();
    include('verification.php')    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>app wellcome <?php echo $_SESSION['user'] ?></h1>
    <button id="logout-btn">Logout</button>
</body>
</html>