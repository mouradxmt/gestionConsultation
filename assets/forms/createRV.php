<?php
include_once("../config.php");
 // if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Adress']) && isset($_POST['DateN']) && isset($_POST['Sexe']) && isset($_POST['Service'])){
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $adresse = $_POST['Adresse'];
    $daten = $_POST['DateN'];
    $sexe = $_POST['Sexe'];
    $service = $_POST['Service'];
    $codeMedecin = $_POST['Medecin'];
echo "kljhrw" . $nom;
echo "<pre>";
print_r($_POST);
echo "</pre>";
    $stmt = $connect->prepare("INSERT INTO patient (nomPatient,prenomPatient,sexePatient,adressePatient,dateNaissancePatient) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $nom,$prenom,$sexe,$adresse,$daten);
    if (!$stmt->execute()) {
      trigger_error('Error executing MySQL query: ' . $stmt->error);
    }
    $stmt = $connect->prepare("INSERT INTO consultation (etatConsultation,IP,journalCliniqueConsultation,codeMedecin) VALUES ('Attente',LAST_INSERT_ID(),'En attente...',?)");
    $stmt->bind_param("d", $codeMedecin);
    if (!$stmt->execute()) {
        trigger_error('Error executing MySQL query: ' . $stmt->error);
      }
    $codeConsultation = mysqli_insert_id($connect);
    header("Location: http://".$options['home']."/index.php?page=consulter&code=".$codeConsultation);
//  }
?>