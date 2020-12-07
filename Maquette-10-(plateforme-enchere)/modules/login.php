<?php 
   
session_start();

    //condition pour vérifier la session login
   if ( isset($_POST['user']) and $_POST['user'] === "admin" and isset($_POST['mdp']) and $_POST['mdp'] === "test") {
        $_SESSION['nomBouton'] = 'admin';
       // $_SESSION['pageLogin'] = 'pages-login.php';
        header('Location: ../index.php');
    }else {
        header('Location: page-login.php');
       
    }
    
?>