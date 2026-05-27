<?php
include 'con.php';
$compperso = $_POST['compperso'];
$compperso = addslashes($compperso);



// Attempt add query execution
$sql = "INSERT INTO competences_personnelles (titre) VALUES ('$compperso')";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../compperso.php?success=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
