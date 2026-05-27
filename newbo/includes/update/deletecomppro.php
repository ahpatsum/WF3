<?php
include 'con.php';
$comppro = $_POST['id_comppro'];

// Attempt add query execution
$sql = "DELETE FROM competences_professionnelles WHERE id_competencepro='$comppro'";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../comppro.php?succesdel=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>