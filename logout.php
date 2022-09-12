<?php
session_start();
session_destroy();

//erro nao esta indo ara index
header('Location : index.php');
exit();