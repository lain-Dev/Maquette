  <?php
  //envoi données vers json
    //condition clic input submit
    if (isset($_POST['submit'])) {

        
        //générateur aléatoire id pour la card créer
        $idEnchere = md5(uniqid(rand(), true)); //On attribue un id unique à l'image via la fonction md5 uniqid et random
        $_POST['id'] = $idEnchere;
        //importer module vérifeir img
        include('imageVerifier.php');
        //chemin pour retourver img sélectionner dans les dossier img
        $_POST['image'] = "img/" . basename($_FILES["image_upload"]["name"]);

        //attribution destination json dans variable
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
            echo '<div class="col-12 d-flex justify-content-center mt-5">
                  <div class="alert alert-success">Le produit a bien été ajouté !</div></div>';
        }else {
          echo '<div class="col-12 d-flex justify-content-center mt-5">
          <div class="alert alert-danger">Erreur survenue lors saisie données !</div></div>';
        }

        
         

    }
    ?>