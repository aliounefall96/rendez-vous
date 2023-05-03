<?php 
    
    if (isset($_POST['connecter'])) {
        extract($_POST);
        $user = connexion($email, $password);
        if ($user) {
           $_SESSION['user'] = $user;
           return header("Location:?page=Dashboard");

        }
    }


    require_once('views/connexion.php');
?>