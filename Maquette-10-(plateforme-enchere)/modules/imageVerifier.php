<?php
//pour vérifier que le ficheir sois bien une image en fonction extension du fichier
$fileName = $_FILES['image_upload']['name']; //On met dans une variable le nom de l'image pour vérifier si l'utilisateur a ajouté une

if ($fileName == "") { // vérifie si la variable n'est pas vide

    $validExtension = ['.jpg', '.jpeg', '.gif', '.png'];//spécifie extension img

    //On verifie dans la variable $_FILES s'il n'y a pas d'erreur interne
    if($_FILES['image_upload']['error'] > 0) {
        echo '<div class="col-12 d-flex justify-content-center mt-5">
        <div class="alert alert-danger">Erreur survenue lors saisie image !</div></div>'; 
        die;//Si oui alors on arrete la fonction et on affiche qu'il y a eu une erreur lors du transfert   
    }
    /*
    $maxSize = 10000000; //On spécifie ici la taille maximale de l'image
    $fileSize = $_FILES['image_upload']['size'];//On recupere via la $_FILES la taille de l'image ajoutée dans l'input

    //Taille de l'image doit être < à $maxSize
    if($fileSize > $maxSize) {
        echo '<div class="col-12 d-flex justify-content-center mt-5">
        <div class="alert alert-danger">image trop lourde !</div></div>'; 
        die;//Si trop lourd alors on envoie le message que le fichier est trop lourd
    }
    
    
    $fileExt = strtolower(substr(strrchr($fileName, '.'), 1)); //On met en minuscule tout le nom du fichier puis à partir du . on récupère tout ce qu'il y a à la suite soit l'extension et on enregistre dans une nouvelle variable

    //On recherche dans le tableau des extensions valides si l'extension du fichier ajouté correspond
    if(!in_array("." . $fileExt, $validExt)) { 
        echo '<div class="col-12 d-flex justify-content-center mt-5">
        <div class="alert alert-danger">le fichier n\'est pas une image !</div></div>';
        die;
    }

    //Arrive ici cela veut dire que nos vérifications on été validées alors on peut procéder à l'envoie de l'image dans son bon dossier
    $tmpName = $_FILES['image_upload']['tmp_name']; //On recupère le nom temporaire ajouté par le serveur pour la gestion de l'image

    $idName = md5(uniqid(rand(), true)); //On attribue un id unique à l'image via la fonction md5 uniqid et random

    $fileDir = "img/" . $idName . "." . $fileExt; //On spécifie la direction d'enregistrement de l'image

    $_POST['image_upload'] = $idName . "." . $fileExt; //On attribue dans la superglobale $_POST le nom de l'image qui ira dans le tableau

    $resultat = move_uploaded_file($tmpName, $fileDir);//On utilise la fonction de la superglobale pour transferer le nom temporaire attribué vers le dossier indiqué

    //Si le fichier a bien été déplacé alors on ajoute toutes les données dans le tableau et on ajoute les dernieres données necessaires pour une enchere
    */
}