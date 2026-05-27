<?php
$link = mysqli_connect("localhost", "tamdintf_wp211", "dbmassin54syba", "tamdintf_cvvictory");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}