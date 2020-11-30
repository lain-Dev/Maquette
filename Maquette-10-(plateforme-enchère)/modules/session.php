<?php

//condition pour relier la session au card apres:
if (isset($_post["submit"])) {
    //atribution des input du formulaire a la session:
        $_SESSION["name"] = htmlspecialchars($_POST["nom_produit"]);
        $_SESSION["description"] = htmlspecialchars($_POST["description_produit"]);
        //$_SESSION["image"] = $_POST["image_produit"];
        $_SESSION["prixInit"] = $_POST["prix_initial_produit"];
        $_SESSION["prixClic"] = $_POST["prix_clic_produit"];
        $_SESSION["augPrix"] = $_POST["augmentation_prix_produit"];
        $_SESSION["augDuree"] = $_POST["augmentation_duree_produit"];
    
}

?>