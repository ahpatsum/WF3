<?php
//====Import the header====
include 'includes/header.php';
//=========================
?>
<ul>
    <li><a href="presentation.php"><i class="fa-solid fa-user-gear"></i><span>Informations Personelles</span></a></li>
    <li><a href="contact.php" class="selected"><i class="fa-solid fa-id-card"></i><span>Information de
                contact</span></a></li>
    <li><a href="comppro.php"><i class="fa-solid fa-suitcase"></i><span>Compétences Professionelles</span></a></li>
    <li><a href="compperso.php"><i class="fa-solid fa-id-card-clip"></i><span>Compétences Personnelles</span></a></li>
    <li><a href="langue.php"><i class="fa-solid fa-language"></i><span>Langues</span></a></li>
    <li><a href="loisir.php"><i class="fa-solid fa-icons"></i><span>Intérêts et Loisirs</span></a></li>
    <li><a href="experiences.php"><i class="fa-brands fa-themeco"></i><span>Experiences Professionelles</span></a></li>
    <li><a href="formation.php"><i class="fa-solid fa-graduation-cap"></i><span>Formations</span></a></li>
</ul>
<ul class="desconnect">
    <li><a href="index.php"><i class="fa-solid fa-power-off"></i><span>Déconnexion</span></a></li>
</ul>
</div>
<div class="right">
    <div class="topbar">
        <span class="themeswitch">
            <button id="theme-switch">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/></svg>
            </button>
        </span>
        <span class="username">Bienvenue&nbsp;<span
                class="bold"><?php echo($presentation_elements['prenom']." ".$presentation_elements['nom']); ?></span></span>
        <img src="<?php echo($presentation_elements['photo']); ?>" alt="photo utilisateur">
    </div>
    <div class="content">
        <div class="container">
            <h3>Informations de contact</h3>
            <form action="includes/update/updatecontact.php" class="mainform" method="post">
                <p>
                    <label>Téléphone</label>
                    <input type="text" name="phone" value="<?php echo($contact_elements['tel']); ?>">
                </p>
                <p>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo($contact_elements['email']); ?>">
                </p>
                <p>
                    <label>Portfolio URL</label>
                    <input type="text" name="portfolio" value="<?php echo($contact_elements['portfolio']); ?>">
                </p>
                <p>
                    <label>Adresse</label>
                    <textarea name="adresse" id="" cols="30"
                        rows="2"><?php echo($contact_elements['adresse']); ?></textarea>
                </p>
                <p>
                    <label>LinkedIn URL</label>
                    <input type="text" name="linkedin" value="<?php echo($contact_elements['linkedin']); ?>">
                </p>
                <p>
                    <button type="login">Enregistrer</button>
                </p>
                <p style="text-align: center; color: #f36d0a;">
                    <?php
                        echo $message;
                    ?>
                </p>
            </form>
        </div>
    </div>
</div>
<?php
//====Import the footer====
include 'includes/footer.php';
//=========================

?>
