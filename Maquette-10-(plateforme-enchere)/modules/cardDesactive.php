<?php

include("activer.php");
$datajson = file_get_contents("../json/data.json");
$data = json_decode($datajson, true);



foreach ($data as $valeur) {
  if ($valeur['active-card'] == 'desactive') {

?>

    <div class="col mb-4">
      <div class="card border border-danger">

        <img src="../<?= $valeur['image'] ?>" class="card-img-top border-bottom" alt="..." style="width: 100%; height: 15vw; object-fit: cover;">

        <div class="card-body">


          <h6 class="card-title"><?php echo $valeur['nom_produit'] ?></h6>
          <p class="card-text">

            descrition: <?php echo $valeur['description_produit'] ?>

            <form method="POST" action="../index.php">

              <div class="form-group row">
                <label for="prix_initial" class="col-md-3 col-form-label font-weight-bold"><h6>init:</h6></label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="prix_initial_produit" placeholder="Minimum 1 €" required min="1" step="0.01" value="<?php echo $valeur['prix_initial_produit'] ?>">
                </div>
              </div>




              <div class="form-group row">
                <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold"><h6>clic:</h6></label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="prix_clic_produit" placeholder="Exemple : 0.01 €" required min="0.01" value="<?php echo $valeur['prix_clic_produit'] ?>">
                </div>
              </div>

              <div class="form-group row">
                <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold"><h6>temps: </h6></label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="temps_enchere" placeholder="1 heure" required min="1" value="<?php echo $valeur['temps_enchere'] ?>">
                </div>
              </div>

              <div class="form-group row">
                <label for="augmentation_prix" class="col-md-3 col-form-label font-weight-bold"><h6>Aug Prix:</h6></label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="augmentation_prix_produit" placeholder="Exemple : 0.01 €" required min="0.01" value="<?php echo $valeur['augmentation_prix_produit'] ?>">
                </div>
              </div>


              <div class="form-group row">
                <label for="augmentation_duree" class="col-md-3 col-form-label font-weight-bold"><h6>Aug temps:</h6></label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="augmentation_duree_produit" placeholder="Minimum 30 sec" required min="30" value="<?php echo $valeur['augmentation_duree_produit'] ?>">
                </div>
              </div>



          </p>

          <div class="form-group row" hidden>
          <input type="text" class="form-control" name="active-card"  value="active">
            </div>
        </div>

        <div class="form-group row">
            <label for="active-card" class="col-md-3 col-form-label font-weight-bold"><h6>Etat</h6></label>
            <div class="col-md-9">
                <select class="custom-select" id="active-card" name="active-card" required>
                    <option value="active">Activer</option>
                </select>
            </div>
        </div>
          
        <div class="justify-content-end d-flex row">
            <input name="id" value="<?= $valeur['id'] ?>" hidden>
            <button id="" class="btn btn-secondary btn-listenchere mr-3 p-2 border-0" name="encherir">
              Encherir</button>
          </div>
         

        </div>
      </div>
    </div>


<?php
  }
}

?>