<?php
session_start();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['user']);
header("location: home-about-us.php");
?>
