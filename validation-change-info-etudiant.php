<?php


require_once 'connexion.php';
require_once 'bit_count.php';
$appliBD = new Connexion();

session_start();
$email = $_SESSION['email'];

$idEtudiantByEmail = $appliBD->getEtudintByEmail($email);
$idEtudiant = $idEtudiantByEmail->getId();


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$description = $_POST['description'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$avatar = $_POST['avatar'];
$jourDisponibles = to_bitfield($_POST['jourDisponibles']);
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$newInfo = $appliBD->setEtudiant($idEtudiant, $nom, $prenom, $passwordHash, $description, $email, $telephone, $avatar, $jourDisponibles);


foreach ($_POST["motClesEtudiant"] as $value) {
    $appliBD->insertMotCles_etudiant($idEtudiant, $value);
}

header('Location: page-profil-etudiant.php?id='.$idEtudiant);








?>