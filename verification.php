<?php
    session_start();
    if(!$_SESSION['user']){
        echo "missing _session[user]";
        // header('Location : index.php');
        // exit();
    }
?>
