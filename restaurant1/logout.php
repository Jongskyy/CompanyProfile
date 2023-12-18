<?php
session_start();
session_unset();
session_destroy();
 
header("Location: halaman_login.php");
exit();
?>
