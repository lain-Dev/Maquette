<?php

if (isset($_POST['encherir'])) {
    $id = $_POST['id'];
    $filename = 'json/data.json';
    $datajson = file_get_contents("json/data.json");
    $data = json_decode($datajson, true);
    

    foreach ($data as $key => $valeur) {
        if ($valeur['id'] == $id) {

          $data[$key]['prix_initial_produit'] = $data[$key]['prix_initial_produit'] + $data[$key]['augmentation_prix_produit'];

          $data[$key]['temps_enchere'] = $data[$key]['temps_enchere'] + $data[$key]['augmentation_duree_produit'];

          file_put_contents($filename, json_encode($data));
        }
    }
}
