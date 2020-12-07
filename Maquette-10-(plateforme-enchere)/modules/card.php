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
foreach ($data as $valeur) {
  //condition recherche valeur active dans les tableaux
  if ($valeur['active-card'] == 'active') {

?>
  <!--intégration html par php-->
  <div class="col mb-4">
    <div class="card border border-success">

      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link active" href="#">Desactiver</a>
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

        <form method="POST">
          <div class="justify-content-end d-flex row">
            <input name="id" value="<?= $valeur['id'] ?>" hidden>
            <button id="" class="btn btn-secondary btn-listenchere mr-3 p-2 border-0" name="encherir">
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