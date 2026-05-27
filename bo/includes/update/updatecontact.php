<?php
include 'con.php';
$phone = $_POST['phone'];
$phone = addslashes($phone);

$email = $_POST['email'];
$email = addslashes($email);

$portfolio = $_POST['portfolio'];
$portfolio = addslashes($portfolio);

$adresse = $_POST['adresse'];
$adresse = addslashes($adresse);

$linkedin = $_POST['linkedin'];
$linkedin = addslashes($linkedin);

// Attempt update query execution
$sql = "UPDATE contact set tel = '$phone', email = '$email', portfolio = '$portfolio', adresse = '$adresse', linkedin = '$linkedin' ";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../contact.php?success=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
