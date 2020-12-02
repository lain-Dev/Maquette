<?php

$datajson = file_get_contents("json/data.json");
$data = json_decode($datajson, true);

foreach ($data as $valeur) {
  
?>

<div class="card m-5" style="width: 18rem;">
  <img src="<?= $valeur['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $valeur['nom_produit'] ?></h5>
    <p class="card-text">
        descrition: <?php echo $valeur['description_produit'] ?> <br>
        prix: <?php echo $valeur['prix_initial_produit'] ?> <br>
        prix du clic: <?php echo $valeur['prix_clic_produit'] ?> <br>
    </p>
    <a href="#" class="btn btn-large btn-danger">Enchérir</a>
  </div>
</div>

<?php
  
}

?>