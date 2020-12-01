  <?php
    if (isset($_POST['submit'])) {

        $data = [
            'nom' => htmlspecialchars($_POST["nom_produit"]),
            'description' => htmlspecialchars($_POST["description_produit"]),
            'image' => $_POST["image_produit"],
            'prixInitial' => $_POST["prix_initial_produit"],
            'prixClic' => $_POST["prix_clic_produit"],
            'prixAugmenter' => $_POST["augmentation_prix_produit"],
            'dureeAugmenter' => $_POST["augmentation_duree_produit"]
        ];

        //on test si le fichier existe 
        $filename = '../json/data.json';
        if (isset($filename)) {
            //fichier existe alors on récupère son contenu on transforme en array
            //retourne le contenu du fichier dans une variable de type string
            $jsonString = file_get_contents($filename);
            //Transforme la structure json en array PHP
            $jsonArray = json_decode($jsonString, true);
        }

        //ajout des données postées au tableau
        //on ajoute une nouvelle entrée dans le tableau
        if ($jsonArray == NULL) {
            file_put_contents($filename, json_encode($data));
        } else {
            array_push($jsonArray, $data);

            //ecraser le fichier json avec la nouvelle structure à partir du tableau
            file_put_contents($filename, json_encode($jsonArray));
        }
    }

    ?>