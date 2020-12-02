  <?php
    if (isset($_POST['submit'])) {

        $idEnchere = md5(uniqid(rand(), true)); //On attribue un id unique à l'image via la fonction md5 uniqid et random
        $_POST['id'] = $idEnchere;

        //on test si le fichier existe 
        $filename = '../json/data.json';
        if (isset($filename)) {
            //fichier existe alors on récupère son contenu on transforme en array
            //retourne le contenu du fichier dans une variable de type string
            $jsonString = file_get_contents($filename);
            //Transforme la structure json en array PHP
            $jsonArray = json_decode($jsonString, true);
            //envoi les "POST" dans le tableau json qui est en php
            array_unshift($jsonArray,$_POST);
            //en rencode le fichier en json aprés avoir reçu données
            file_put_contents($filename, json_encode($jsonArray));
        }
    }
    ?>