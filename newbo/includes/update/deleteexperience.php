<?php
include 'con.php';
$idexperience = $_POST['id_experience'];

// Attempt add query execution
$sql = "DELETE FROM experiences WHERE id_experience='$idexperience'";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../experiences.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>