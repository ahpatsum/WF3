<?php
include 'con.php';
$idformation = $_POST['id_formation'];

// Attempt add query execution
$sql = "DELETE FROM formation WHERE id_formation='$idformation'";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../formation.php");
} else {
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>