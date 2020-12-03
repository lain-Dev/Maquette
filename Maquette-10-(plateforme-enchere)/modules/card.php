<?php

include("enchere.php");
$datajson = file_get_contents("json/data.json");
$data = json_decode($datajson, true);


foreach ($data as $valeur) {

?>

  <div class="col mb-4">
    <div class="card border border-success">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
      <img src="<?= $valeur['image'] ?>" class="card-img-top border-bottom" alt="..." style="width: 100%; height: 15vw; object-fit: cover;">

      <div class="card-body">

        <h5 class="card-title"><?php echo $valeur['nom_produit'] ?></h5>
        <p class="card-text">
          descrition: <?php echo $valeur['description_produit'] ?>
          <br>
          prix: <?php echo $valeur['prix_initial_produit'] ?> <br>
          temps l'enchère : <?= $valeur['temps_enchere'] ?>
        </p>

        <div class="d-flex justify-content-center">
          <button type="submit" formmethod="post" name="encherir" value="encherir" class="alert alert-primary">
            enchérir
          </button>
        </div>

      </div>
    </div>
  </div>


<?php

}

?>