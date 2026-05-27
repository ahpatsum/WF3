<?php
require('db_connect.php');
$message ="";
if (isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables.
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username=="" || $password==""){
        header('Location: ../index.php?msg=b');
    }else{
        // CHECK FOR THE RECORD FROM TABLE
        $query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

        if ($count == 1){
            header('Location: ../presentation.php');
            // on démarre la session :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd)
            $_SESSION['login'] = $_POST['username'];
            $_SESSION['pwd'] = $_POST['password'];
        }else{
            header('Location: ../index.php?msg=a');
        }
    }
}
?>