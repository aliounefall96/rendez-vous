<?php 
    session_start();
    require_once("models/database.php");
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'connexion':
                require_once('controllers/loginController.php');
            break;
            case 'Dashboard':
                require_once('views/dashboard.php');
            break;
            case 'docteur':
                require_once('controllers/docteurController.php');
            break;
            case 'rv':
                require_once('controllers/rvController.php');
            break;

            default:
                require_once('controllers/homeController.php');
            break;
        }
    }else{
        require_once('controllers/homeController.php');
    }

    
?>