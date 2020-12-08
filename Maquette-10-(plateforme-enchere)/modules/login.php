<?php 
//module pour session login 
//ouverture de la session
session_start();

    //condition pour vérifier la session login
   if ( isset($_POST['user']) and $_POST['user'] === "admin" and isset($_POST['mdp']) and $_POST['mdp'] === "test") {
        $_SESSION['nomBouton'] = 'admin';
       // $_SESSION['pageLogin'] = 'pages-login.php';
       //ouverture de la page 
        header('Location: ../index.php');
    }else {
        //ouverture de la page
        header('Location: page-login.php');
       
    }
    
?>