<?php
    function getDatabaseConnexion() {
    try {
    $user = "tamdintf_mus";
    $pass = "JGJn6F3QWfPHSTk";
    $pdo = new PDO('mysql:host=localhost;dbname=tamdintf_cvvictory', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

    } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
    }
}

// Get the presentation infos
function getPresentation() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from presentation';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)){
        return $row[0];
    }
}


// Get the contact infos
function getContact() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from contact';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)){
        return $row[0];
    }
}

// Get professional skills
function getProfessionalskills() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from competences_professionnelles order by ordre asc';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    return $row;
}
function getProfessionalskillsLastItem() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT ordre from competences_professionnelles ORDER BY ordre DESC LIMIT 1';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)){
        return $row[0];
    }
}




// Get the languages
function getLanguages() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from langues';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    return $row;
}

// Get personal skills
function getPersonalskills() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from competences_personnelles';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    return $row;
}

// Get hobbies
function getHobbies() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from loisir';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    return $row;
}

// Get experiences
function getExperiences() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from experiences order by date_debut desc';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    return $row;
}

// Get formations
function getFormations() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from formation order by date_fin desc';
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    return $row;
}


function FormatTel($numTel) {
    $i=0;
    $j=0;
    $formate = "";
    while ($i<strlen($numTel)) { //tant qu il y a des caracteres
        if ($j < 2) {
            if (preg_match('/^[0-9]$/', $numTel[$i])) { //si on a bien un chiffre on le garde
                $formate .= $numTel[$i];
                $j++;
            }
            $i++;
        }
        else { //si on a mis 2 chiffres a la suite on met un espace
            $formate .= " ";
            $j=0;
        }
    }
    return $formate;
}