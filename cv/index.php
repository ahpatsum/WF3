<?php
//Import database classes=======
include '../bo/includes/database.php';
//Presentation Page
$presentation_elements = getPresentation();

//Contact Page
$contact_elements = getContact();

//Languages Page
$language_elements = getLanguages();

//Personal skills Page
$personalskills_elements = getPersonalskills();

//Professional skills Page
$professionalskills_elements = getProfessionalskills();

//Professional hobbies
$hobbies_elements = getHobbies();

//Professional experiences
$experiences_elements = getExperiences();

//Formations
$formations_elements = getFormations();
//==============================

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styler.css">
  <title>CV as Chance for Victory</title>
    <meta name="description" content="CV as Chance for Victory">
    <meta name="author" content="Mustapha Amraoui">
    <link rel="icon" href="../lp/images/logo-icon.png">
</head>

<body>
<a href="#" onclick="printDiv('#wrapper')" class="printbtn"><img src="img/printer-tool.svg"></a>

  <div class="wrapper" id="#wrapper">
      <div class="insider" id="#insider">

          <header>
          <div class="presentation">
          <span class="name"><?php echo ($presentation_elements['prenom']." ".$presentation_elements['nom']); ?></span>
          <p class="intitule"><?php echo ($presentation_elements['intitule_post']); ?></p>
          <p class="description"><?php echo ($presentation_elements['descr']); ?></p>
        </div>
        <div class="pic">
          <img src="../newbo/<?php echo ($presentation_elements['photo']); ?>" alt="Mustapha Amraoui">
        </div>
        <div class="contact">
          <div class="infos">
            <div class="label">
              Téléphone :
            </div>
            <div class="info">
                <?php echo (utf8_encode(FormatTel($contact_elements['tel']))); ?>
            </div>
          </div>

          <div class="infos">
            <div class="label">
              Adresse e-mail :
            </div>
            <div class="info">
                <a href="mailto:<?php echo (utf8_encode($contact_elements['email'])); ?>"><?php echo (utf8_encode($contact_elements['email'])); ?></a>
            </div>
          </div>

          <div class="infos">
            <div class="label">
              Portfolio :
            </div>
            <div class="info">
                <a href="<?php echo (utf8_encode($contact_elements['portfolio'])); ?>" target="_blank"><?php echo (utf8_encode($contact_elements['portfolio'])); ?></a>
            </div>
          </div>

          <div class="infos last">
            <div class="label">
              Adresse :
            </div>
            <div class="info last">
                <?php echo (utf8_encode($contact_elements['adresse'])); ?>
            </div>
          </div>
          <div class="linkedinlink">
          </br>
            <span class="label">LinkedIn :</span>
            <span class="info"><a href="<?php echo "https://".(utf8_encode($contact_elements['linkedin'])); ?>" class="boldblue" target="_blank"><?php echo (utf8_encode($contact_elements['linkedin'])); ?></a></span>
          </div>
        </div>
      </header>
      <main>
        <section class="leftside">
          <div class="experience">
            <div class="padding"></div>
            <div class="boxleft">
              <h2>EXPÉRIENCE PROFESSIONNELLE</h2>
                <?php
                foreach($experiences_elements as $experience){
                ?>
                  <div class="itemexperience">
                    <h3 class="label"><?php echo $experience['titre']; ?></h3>
                    <span class="date"><?php echo $experience['date_debut']; ?> - <?php echo $experience['date_fin']; ?></span>
                    <ul>
                        <?php echo $experience['description']; ?>
                    </ul>
                  </div>
                <?php } ?>
            </div>
          </div>
          <div class="formation">
            <div class="padding"></div>
            <div class="boxleft">
              <h2>Formation</h2>
                <?php
                foreach($formations_elements as $formation){
                ?>
                  <div class="itemexperience">
                    <h3 class="label"><?php echo $formation['titre']; ?></h3>
                    <span class="date">  <?php echo $formation['place']; ?> <?php echo $formation['date_debut']; ?> - <?php echo $formation['date_fin']; ?></span>
                    <span class="description"><?php echo $formation['description']; ?></span>
                  </div>
                <?php } ?>
            </div>
          </div>
        </section>
        <section class="rightside">
          <div class="competencespro">
            <div class="padding"></div>
            <div class="boxright">
              <h2>Compétences professionnelles</h2>
                <?php
                foreach($professionalskills_elements as $professionalskills){
                ?>
              <div class="item">
                <img src="../bo/img/competences/<?php echo $professionalskills['icon']; ?>">
                <span class="label"><?php echo $professionalskills['titre']; ?></span>
                <div class="progress">
                  <div class="meter color">
                    <span style="width: <?php echo $professionalskills['niveau']; ?>"></span>
                  </div>
                </div>
              </div>
                <?php } ?>
              
            </div>
          </div>
          <div class="competencesperso">
            <div class="padding"></div>
            <div class="boxright">
              <h2>Compétences personelles</h2>
              <div class="item">
                  <?php
                  foreach($personalskills_elements as $personalskills){
                  ?>
                    <span class="label"><?php echo $personalskills['titre']; ?></span>
                  <?php } ?>
              </div>
            </div>
          </div>
          <div class="langues">
            <div class="padding"></div>
            <div class="boxright">
              <h2>Langues</h2>
              <div class="item">
                  <?php
                  foreach($language_elements as $language){
                  ?>
                    <span class="label"><?php echo utf8_encode($language['titre']); ?></span>
                  <?php } ?>
              </div>
            </div>
          </div>
          <div class="loisirs">
            <div class="padding"></div>
            <div class="boxright">
              <h2>Intérêts et loisirs</h2>
              <div class="item">
                <ul>
                    <?php
                    foreach($hobbies_elements as $hobbies){
                    ?>
                    <li><img src="../newbo/img/loisirs/<?php echo $hobbies['icon'];?>" alt="<?php echo $hobbies['titre'];?>"></li>
                    <?php } ?>
                </ul>
              </div>
            </div>
          </div>


        </section>
      </main>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript">

      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }

  </script>
</body>

</html>