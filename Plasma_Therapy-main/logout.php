<?php
session_start();
$un=$_SESSION['un'];
session_destroy();
unset($un);
header('Location:index.php');
?>