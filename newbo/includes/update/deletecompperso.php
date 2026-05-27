<?php
include 'con.php';
$idcompperso = $_POST['id_competenceperso'];

// Attempt add query execution
$sql = "DELETE FROM competences_personnelles WHERE id_competenceperso='$idcompperso'";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../compperso.php?successdel=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>