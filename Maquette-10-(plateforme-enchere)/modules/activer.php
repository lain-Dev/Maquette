<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $filename = '../json/data.json';
    $datajson = file_get_contents("json/data.json");
    $data = json_decode($datajson, true);
    

    foreach ($data as $key => $valeur) {
        if ($valeur['id'] == $id) {

            
            $data[$key]['active-card'] = $_POST['active-card'];


          file_put_contents($filename, json_encode($data));
        }
    }
}
