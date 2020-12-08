<?php
//recherche des cards actives pour index.php
//importation module enchère
include("enchere.php");
//importation module timer
//include("timer.php");
//variable dont destination fichier json
$datajson = file_get_contents("json/data.json");
//décodage du ficher en php
$data = json_decode($datajson, true);


//recherche dans les tableaux
foreach ($data as $key =>$valeur) {
  
  //condition recherche valeur active dans les tableaux
  if ($data[$key]['active-card'] == 'active') {

?>
  <!--intégration html par php-->
  <div class="col mb-4">
    <div class="card border border-success">

    <?php include("desactiver.php"); ?>
      <div class="card-header">
      <form method="POST" action="">
      <div class="form-group row ml-1" hidden>
            <label for="active-card" class="col-md-3 col-form-label font-weight-bold"><h6>Etat</h6></label>
            <div class="col-md-9">
                <select class="custom-select" id="active-card" name="active-card" required style="width: 218px;">
                    <option value="desactive">desactiver</option>
                </select>
            </div>
        </div>

        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
          <div class="justify-content-end d-flex row ml-5">
            <input name="id" value="<?= $valeur['id'] ?>" hidden>
            <button id="" class="btn btn-secondary btn-listenchere mr-3 p-2 border-0" name="desactiver">
              desactive</button>
          </div>
          </li>
        </ul>
      </div>
      </form>
      <img src="<?= $valeur['image'] ?>" class="card-img-top border-bottom" alt="..." style="width: 100%; height: 15vw; object-fit: cover;">

      <div class="card-body">

        <h5 class="card-title"><?php echo $valeur['nom_produit'] ?></h5>
        <p class="card-text">
          descrition: <?php echo $valeur['description_produit'] ?></p>
        <p>prix: <?php echo $valeur['prix_initial_produit'] ?></p>
        <p>temps l'enchère :</p> <p id="temps_<?= $values['id'] ?>"></p>

        <form method="POST" >
          <div class="justify-content-end d-flex row">
            <input name="id" value="<?= $valeur['id'] ?>" hidden>
            <button id="btn_<?= $values['id'] ?> class="btn btn-secondary btn-listenchere mr-3 p-2 border-0" name="encherir">
              Encherir</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  


<?php
  }
}

?>