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
        require_once 'conections.php';
    ?>
    <section class="loggin">
        <h1 class="title">Login project</h1>
        <form action="login.php" method="post" class="form">
            <input type="text" name="user" id="user" class="user-name" placeholder="user">
            <input type="password" name="password" id="password" class="password" placeholder="password">
            <input type="submit" class="submit-btn" value="sing in">
        </form>
    </section>
    <script src="script.js"></script>
</body>
</html>