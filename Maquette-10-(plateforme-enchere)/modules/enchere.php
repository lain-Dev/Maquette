<?php

if (isset($_POST['encherir'])) {
    $datajson = file_get_contents("json/data.json");
    $data = json_decode($datajson, true);
    $id = $_POST['id'];

    foreach ($data as $valeur) {
        if ($valeur['id'] == $id) {

            $valeur['prix_initial_produit'] = $valeur['prix_initial_produit'] + $valeur['augmentation_prix_produit'];

            $valeur['temps_enchere'] = $valeur['temps_enchere'] + $valeur['augmentation_duree_produit'];

            file_put_contents($filename, json_encode($jsonArray));

            echo '<div class="col-12 d-flex justify-content-center mt-5">
          <div class="alert alert-danger">Enchère valider !</div></div>';
        }
    }

    
}
