<?php
$link = mysqli_connect("localhost", "tamdintf_mus", "JGJn6F3QWfPHSTk", "tamdintf_cvvictory");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$lastname = $_POST['first_name'];
$lastname = addslashes($lastname);

$firstname = $_POST['last_name'];
$firstname = addslashes($firstname);

$post = $_POST['post'];
$post = addslashes($post);

$description = $_POST['description'];
$description = addslashes($description);


// Attempt update query execution
$sql = "UPDATE presentation set nom = '$lastname', prenom = '$firstname', intitule_post = '$post', description = '$description' ";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../presentation.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


