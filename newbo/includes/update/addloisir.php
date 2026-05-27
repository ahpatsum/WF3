<?php
include 'con.php';
$titre = $_POST['titre'];
$titre = addslashes($titre);

$image = $_FILES['iconloisir']['name'];
// image file directory
$target = "../../img/loisirs/".basename($image);

//var_dump(basename($image));
//var_dump($_FILES['icontool']['tmp_name']);


// Attempt add query execution
$sql = "INSERT INTO loisir (titre, icon) VALUES ('$titre','$image')";
if (mysqli_query($link, $sql)) {
    //echo "Records were updated successfully.";
    move_uploaded_file($_FILES['iconloisir']['tmp_name'], $target);
    header("Location: ../../loisir.php?success=oui");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);