<?php
$connection = mysqli_connect('localhost', 'tamdintf_wp211', 'dbmassin54syba');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'tamdintf_cvvictory');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}