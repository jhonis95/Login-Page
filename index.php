<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main class="app">
        <section class="form-container">
        <h1 class="title">Login project</h1>
            <form action="login.php" method="post" class="form">
                <input type="text" name="user" id="user" class="user-name" placeholder="user">
                <input type="password" name="password" id="password" class="password" autocomplete="off" placeholder="password">
                <input type="button" class="submit-btn" id='submit-btn' value="sign in">
            </form>
            <p class="errorMessenge" id="errorMessenge" style="visibility : hidden"></p>
            <h3>don't have a account yet?? <span><a href="register.php">sign up</a></span></h3>
        </section>
    </main>
    <script src="index.js"></script>
</body>
</html>