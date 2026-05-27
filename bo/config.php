<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-bo.css">
    <title>CV as Chance for Victory</title>
</head>

<body>
<div class="wrapper">
    <div class="insider">
        <main>
            <div class="left">
                <div class="logohead">
                    <img src="img/logobo.png" alt="">
                </div>
                <ul>
                    <li><a href="presentation.php"><img src="img/presentation.png"><span>Informations Personelles</span></a></li>
                    <li><a href="contact.php"><img src="img/contact.png"><span>Information de contact</span></a></li>
                    <li><a href="comppro.php"><img src="img/comppro.png"><span>Compétences Professionelles</span></a></li>
                    <li><a href="compperso.php"><img src="img/compperso.png"><span>Compétences Personnelles</span></a></li>
                    <li><a href="langue.php"><img src="img/langue.png"><span>Langues</span></a></li>
                    <li><a href="loisir.php"><img src="img/loisir.png"><span>Intérêts et Loisirs</span></a></li>
                    <li><a href="experiences.php"><img src="img/experiencepro.png"><span>Experiences Professionelles</span></a></li>
                    <li><a href="formation.php"><img src="img/formation.png"><span>Formations</span></a></li>
                </ul>
                <ul class="desconnect">
                    <li><a href="config.php" class="selected"><img src="img/config.png"><span>Configuration</span></a></li>
                    <li><a href="index.php"><i class="fa-solid fa-power-off"></i><span>Déconnexion</span></a></li>
                </ul>
            </div>
            <div class="right">
                <div class="topbar">
                    <span class="username">Bienvenue&nbsp;<span class="bold"><?php echo $_SESSION['login']; ?></span></span>
                    <img src="img/profile.png" alt="photo utilisateur">
                </div>
                <div class="content">
                    <div class="container">
                        <h3>Configuration</h3>
                        <form action="/signup" method="post">
                            <p>
                                <input type=file accept="image/*">
                            </p>
                            <p>
                                <label>Nom</label>
                                <input type="text" name="first_name">
                            </p>
                            <p>
                                <label>Prénom</label>
                                <input type="text" name="last_name">
                            </p>
                            <p>
                                <label>Intitulé de poste</label>
                                <textarea name="poste" id="" cols="30" rows="4"></textarea>
                            </p>
                            <p>
                                <label>Description</label>
                                <textarea name="description" id="" cols="30" rows="4"></textarea>
                            </p>
                            <p>
                                <button type="login">Se connecter</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script-bo.js"></script>
</body>

</html>