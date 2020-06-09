<?php
session_start();
unset($_SESSION['logged']['name']); 
header('location: index.php');
?>
