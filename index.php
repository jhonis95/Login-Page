<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // require_once 'conections.php';
        $conn =mysqli_connect('localhost','jonatan','0000','logging_user')or die(mysqli_error());
    ?>
    <section class="loggin">
        <h1 class="title">Loggin project</h1>
        <form action="" class="form">
            <input type="text" name="" id="" class="user-name" placeholder="user">
            <input type="password" name="" id="" class="password" placeholder="password">
            <input type="submit" value="sing in">
        </form>
    </section>
</body>
</html>