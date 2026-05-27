<?php include('includes/db_connect.php') ?>
<?php include('includes/authen_login.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-bo.css">
    <title>CV as Chance for Victory</title>
</head>

<body>
    <div class="wrapper">
        <div class="insider">
            <div class="connexionbloc">
                <img src="img/logo.png" alt="cv as chance for victory">
                <form action="includes/authen_login.php" method="post">
                    <p>
                        <label>Login / Email</label>
                        <input type="text" name="username">
                    </p>
                    <p>
                        <label>Mot de passe</label>
                        <input type="password" name="password">
                    </p>
                    <p>
                        <button type="submit" name="login_btn">Se connecter</button>
                    </p>
                    <p style="text-align: center; color: indianred; font-size: 14px;">
                    <?php
                    If(isset($_GET['msg'])){
                        switch ($_GET['msg']) {
                            case 'a':
                                echo "Login ou mot de passe incorrect";
                                break;
                            case 'b':
                                echo "Faut renseigner les deux champs login et mot de passe";
                                break;
                        }
                    }
                    ?>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script-bo.js">

    </script>
</body>

</html>