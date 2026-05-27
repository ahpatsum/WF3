<?php
include 'con.php';
$langue = $_POST['langue'];
$langue = addslashes($langue);



// Attempt add query execution
$sql = "INSERT INTO langues (titre) VALUES ('$langue')";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../langue.php?success=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
