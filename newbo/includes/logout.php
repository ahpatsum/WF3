<?php
// destroy the session
//session_destroy();
//header('Refresh: 2; URL = ../index.php');
session_start();
session_destroy();
header('Location: ../index.php');
exit;
?>