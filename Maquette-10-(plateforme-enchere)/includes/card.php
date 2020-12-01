
<?php foreach($_SESSION['DUMMY_ARRAY'] as $key => $data) :?>  

<div class="card m-5" style="width: 18rem;">
  <img src="<?php $data['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php $data['nom'] ?></h5>
    <p class="card-text">
        descrition: <?php $data['description'] ?> <br>
        prix: <?php $data['prixInitial'] ?> <br>
        prix du clic: <?php $data['prixClic'] ?> <br>
    </p>
    <a href="#" class="btn btn-large btn-danger">Enchérir</a>
  </div>
</div>