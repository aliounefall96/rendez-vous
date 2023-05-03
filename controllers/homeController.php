<?php 
    $docteurs = getAllDocteur();
    if (isset($_POST['ajouter'])) {
        extract($_POST);
        addRv($nomComplet, $email, $telephone, $dateNaiss, $heure, $idDocteur, $symptome,"NOUVEAU");
    }
    require_once('views/home.php');
?>