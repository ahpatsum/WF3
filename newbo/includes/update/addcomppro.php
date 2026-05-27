<?php
include 'con.php';
$titre = $_POST['titre'];
$titre = addslashes($titre);

$niveau = $_POST['niveau']."%";
$niveau = addslashes($niveau);

$ordre = $_POST['ordre']+1;

//var_dump($ordre);

$image = $_FILES['icontool']['name'];
// image file directory
$target = "../../img/competences/".basename($image);

//var_dump(basename($image));
//var_dump($_FILES['icontool']['tmp_name']);


// Attempt add query execution
$sql = "INSERT INTO competences_professionnelles (titre, niveau, icon, ordre) VALUES ('$titre', '$niveau', '$image','$ordre')";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    move_uploaded_file($_FILES['icontool']['tmp_name'], $target);
    header("Location: ../../comppro.php?success=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);