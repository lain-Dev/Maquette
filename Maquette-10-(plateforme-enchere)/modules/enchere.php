<?php
//module enchere
//condition quand je clic sur input encherir
if (isset($_POST['encherir'])) {
    //attibution id dans une variable
    $id = $_POST['id'];
    //attribution destination dans une variable
    $filename = 'json/data.json';
    //destination ficheir json
    $datajson = file_get_contents("json/data.json");
    //decode fichier json en php
    $data = json_decode($datajson, true);
    
    //recherche dans tableau
    foreach ($data as $key => $valeur) {
        //condition si id de la card correspond a celui du tableau
        if ($valeur['id'] == $id) {
          //opération enchere
          $data[$key]['prix_initial_produit'] = $data[$key]['prix_initial_produit'] + $data[$key]['augmentation_prix_produit'];
          //operation enchere
          $data[$key]['temps_enchere'] = $data[$key]['temps_enchere'] + $data[$key]['augmentation_duree_produit'];
          //encodage du fichier en json
          file_put_contents($filename, json_encode($data));
        }
    }
}
