<?php

if (isset($_POST['activer'])) {
    $id = $_POST['id'];
    
    
    //atribution chemin fichier json à une variable
    $filename = '../json/data.json';
    //ouvre le fichier json
    $datajson = file_get_contents("$filename");
    //on decode le fichier json en php
    $data = json_decode($datajson, true);
    
    //on fait recherche dans les tableaux
    foreach ($data as $key => $valeur) {
        //condition cherche le bon tableau par rapport ID sélectionné
        if ($valeur['id'] == $id) {

            //attribution nouvelle valeur a élément active
            $data[$key]['active-card'] = $_POST["active-card"];
            $data[$key]['prix_initial_produit'] = $_POST["prix_initial_produit"];
            $data[$key]['prix_clic_produit'] = $_POST["prix_clic_produit"];
            $data[$key]['temps_enchere'] = $_POST["temps_enchere"];
            $data[$key]['augmentation_prix_produit'] = $_POST["augmentation_prix_produit"];
            $data[$key]['augmentation_duree_produit'] = $_POST["augmentation_duree_produit"];
            //encodage fichier en json
            file_put_contents($filename, json_encode($data));
        }
    }
}
