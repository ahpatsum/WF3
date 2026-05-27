<?php
include 'con.php';

$titre = $_POST['titre'];
$titre = addslashes($titre);

$datedebut = $_POST['datedebut'];
$datedebut = addslashes($datedebut);

$datefin = $_POST['datefin'];
$datefin = addslashes($datefin);

$ville = $_POST['ville'];
$ville = addslashes($ville);

$description = $_POST['description'];
$description = addslashes($description);


// Attempt add query execution
$sql = "INSERT INTO formation (titre, date_debut, date_fin, place, description) VALUES ('$titre','$datedebut','$datefin','$ville','$description')";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    header("Location: ../../formation.php?success=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
