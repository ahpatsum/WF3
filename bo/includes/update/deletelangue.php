<?php
include 'con.php';
$idlangue = $_POST['id_langue'];

// Attempt add query execution
$sql = "DELETE FROM langues WHERE id_langue='$idlangue'";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../langue.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>