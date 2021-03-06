<!--html formualire -->
<?php include("../modules/sendData.php"); ?>

<section class="container mt-5">

    <form action="" method="POST" enctype="multipart/form-data">
        <!--à utiliser multipart/form-data lorsque votre formulaire comprend des <input type="file">éléments -->
        <div class="form-group row">
            <label for="nom_produit" class="col-md-3 col-form-label font-weight-bold">Nom du produit:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nom_produit" placeholder="Exemple : iphone 6, etc." pattern="[a-zA-Z0-9 ]+" required value="iphone test">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-3 col-form-label font-weight-bold">Description:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="description_produit" placeholder="Description du produit" pattern="[a-zA-Z0-9 é & è ç ! à ù , ; . £ * # ' ]+" value="description lol" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-3 col-form-label font-weight-bold">Image du produit</label>
            <div class="col-md-9">
                <input type="file" class="form-control" name="image_upload">
            </div>
        </div>

        <div class="form-group row">
            <label for="prix_initial" class="col-md-3 col-form-label font-weight-bold">Prix initial (en €):</label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="prix_initial_produit" placeholder="Minimum 1 €" required min="1" step="0.01" value="1">
            </div>
        </div>

        <div class="form-group row">
            <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">Prix du clic (en €)</label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="prix_clic_produit" placeholder="Exemple : 0.01 €" required min="0.01" value="1.01">
            </div>
        </div>

        <div class="form-group row">
            <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">temps enchère (Année): </label>
            <div class="col-md-9">
            <input type="number" class="form-control" name="time-y" placeholder="Exemple : 2020" min="2020" value="2020" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">temps enchère (mois): </label>
            <div class="col-md-9">
            <input type="number" class="form-control" name="time-m" placeholder="Exemple :12"  min="01"  value="12" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">temps enchère (day): </label>
            <div class="col-md-9">
            <input type="number" class="form-control" name="time-d" placeholder="Exemple : 18 €"  min="0" value="8" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">temps enchère (h): </label>
            <div class="col-md-9">
            <input type="number" class="form-control" name="time-h" placeholder="Exemple : 1" required min="0" value="19" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="augmentation_prix" class="col-md-3 col-form-label font-weight-bold">Augmentation prix
                enchère (en €):</label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="augmentation_prix_produit" placeholder="Exemple : 0.01 €" required min="0.01" value="1.01">
            </div>
        </div>

        <div class="form-group row">
            <label for="augmentation_duree" class="col-md-3 col-form-label font-weight-bold">Augmentation durée
                enchère (en secondes):</label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="augmentation_duree_produit" placeholder="Minimum 30 sec" required min="30" value="30">
            </div>
        </div>

        <div class="form-group row">
            <label for="active-card" class="col-md-3 col-form-label font-weight-bold">choix activation de la carte (défaut activer)</label>
            <div class="col-md-9">
                <select class="custom-select" id="active-card" name="active-card" required>
                    <option value="active">Activer</option>
                    <option value="desactive">Désactiver</option>
                    
                </select>
            </div>
        </div>

        <div class="justify-content-end d-flex row">
            <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="submit" type="submit" value="Ajouter le produit">
        </div>

    </form>

</section>