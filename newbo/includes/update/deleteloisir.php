<?php
include 'con.php';
$idloisir = $_POST['id_loisir'];

// Attempt add query execution
$sql = "DELETE FROM loisir WHERE id_loisir='$idloisir'";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../loisir.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>