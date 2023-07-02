<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <main class="app">
        <section class="form-container">
            <h1>complete the form <br> to sign in:</h1>
            <form action="login.php" method="post" class="form">
                <input type="text" name="user" id="toRegisterUser" placeholder="name">
                <input type="password" name="password" id="registerPassword" placeholder="password">
                <button type="button" id="register">register</button>
            </form>
            <h3>
                Back to <spam><a href="index.php">sing in</a></spam>
            </h3>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>