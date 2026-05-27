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

