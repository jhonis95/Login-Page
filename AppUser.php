<?php
    //iniciando sessão
    session_start();
    include('verification.php')    
?>

<h1>app wellcome <?php echo $_SESSION['user'] ?></h1>
<button><a href="logout.php">sair</a></button>