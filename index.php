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
        $conn =new mysqli('localhost','jonatan','0000','logging_users');
        if($conn -> connect_errno){
            echo "Failed to connect to MySQL: " . $conn -> connect_error;
            exit();
        }
    ?>
    <section class="loggin">
        <h1 class="title">Login project</h1>
        <form action="" class="form">
            <input type="text" name="" id="" class="user-name" placeholder="user">
            <input type="password" name="" id="" class="password" placeholder="password">
            <input type="submit" value="sing in">
        </form>
    </section>
</body>
</html>