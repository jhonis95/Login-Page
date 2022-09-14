<?php
session_start();
session_destroy();

//erro nao esta indo ara index
// ob_start();
// header('Location : index.php');
// ob_end_flush();
exit();