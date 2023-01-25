<?php

session_start();
$_SESSION['login'] = 0;
$_SESSION['type'] = 0;
header("Location: index.php");
?>