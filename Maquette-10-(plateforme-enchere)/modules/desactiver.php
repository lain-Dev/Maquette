<?php

if (isset($_POST['desactiver'])) {
    $id = $_POST['id'];
    
    
    //atribution chemin fichier json à une variable
    $filename = 'json/data.json';
    //ouvre le fichier json
    $datajson = file_get_contents($filename);
    //on decode le fichier json en php
    $data = json_decode($datajson, true);
    
    //on fait recherche dans les tableaux
    foreach ($data as $key => $valeur) {
        //condition cherche le bon tableau par rapport ID sélectionné
        if ($valeur['id'] == $id) {

            //attribution nouvelle valeur a élément active
            $data[$key]['active-card'] = $_POST["active-card"];
            //encodage fichier en json
            file_put_contents($filename, json_encode($data));
            header("location: index.php");
        }
    }
}