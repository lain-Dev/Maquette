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
                <input type="file" class="form-control" name="image_upload" >
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
            <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">temps enchère (heures): </label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="prix_clic_produit" placeholder="1 heure" required min="1" value="1">
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

        <div class="justify-content-end d-flex row">
            <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="submit" type="submit" value="Ajouter le produit">
        </div>

    </form>

</section>